<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $title = 'ASDR Infotech - Crossword Maker';
    $creator = 0;
    
    $directoryName = "ASDR Infotech";

    $width = $_POST['width'];
    $height = $_POST['height'];
    $acrossClues = explode("\n", trim($_POST['across-clues']));
    $downClues = explode("\n", trim($_POST['down-clues']));

    // Create XML structure
    $xml = new DOMDocument('1.0', 'UTF-8');

    $root = $xml->createElement('crossword-compiler-applet');
    $root->setAttribute('xmlns', 'http://crossword.info/xml/crossword-compiler-applet');
    $xml->appendChild($root);

    $appletSettings = $xml->createElement('applet-settings');
    $appletSettings->setAttribute('width', '437');
    $appletSettings->setAttribute('height', '283');
    $root->appendChild($appletSettings);

    $rectangularPuzzle = $xml->createElement('rectangular-puzzle');
    $rectangularPuzzle->setAttribute('xmlns', 'http://crossword.info/xml/rectangular-puzzle');
    $rectangularPuzzle->setAttribute('alphabet', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $root->appendChild($rectangularPuzzle);

    $metadata = $xml->createElement('metadata');
    $rectangularPuzzle->appendChild($metadata);

    $titleElement = $xml->createElement('title', htmlspecialchars($title));
    $metadata->appendChild($titleElement);

    $creatorElement = $xml->createElement('creator', htmlspecialchars($creator));
    $metadata->appendChild($creatorElement);

    $crossword = $xml->createElement('crossword');
    $rectangularPuzzle->appendChild($crossword);

    $grid = $xml->createElement('grid');
    $grid->setAttribute('width', $width);
    $grid->setAttribute('height', $height);
    $crossword->appendChild($grid);

    $clueNumber = 1;
    $words = [];
    $numberedCells = [];

    // Process grid and assign numbers to cells
    for ($y = 1; $y <= $height; $y++) {
        for ($x = 1; $x <= $width; $x++) {
            $cellName = "cell-$x-$y";
            $cellValue = isset($_POST[$cellName]) ? $_POST[$cellName] : '';
            $cell = $xml->createElement('cell');
            $cell->setAttribute('x', $x);
            $cell->setAttribute('y', $y);

            if (empty($cellValue)) {
                $cell->setAttribute('type', 'block');
            } else {
                $cell->setAttribute('solution', strtoupper($cellValue));
                $isAcrossStart = ($x == 1 || empty($_POST["cell-" . ($x - 1) . "-" . $y])) && ($x < $width && !empty($_POST["cell-" . ($x + 1) . "-" . $y]));
                $isDownStart = ($y == 1 || empty($_POST["cell-" . $x . "-" . ($y - 1)])) && ($y < $height && !empty($_POST["cell-" . $x . "-" . ($y + 1)]));
                if ($isAcrossStart || $isDownStart) {
                    $cell->setAttribute('number', $clueNumber);
                    $numberedCells["$x-$y"] = $clueNumber;
                    $clueNumber++;
                }
                if ($isAcrossStart) {
                    $words[] = ['id' => count($words) + 1, 'x' => $x, 'y' => $y, 'direction' => 'across'];
                }
                if ($isDownStart) {
                    $words[] = ['id' => count($words) + 1, 'x' => $x, 'y' => $y, 'direction' => 'down'];
                }
            }
            $grid->appendChild($cell);
        }
    }

    foreach ($words as $word) {
        $wordElement = $xml->createElement('word');
        $wordElement->setAttribute('id', $word['id']);
        if ($word['direction'] == 'across') {
            $endX = $word['x'];
            while ($endX <= $width && !empty($_POST["cell-$endX-" . $word['y']])) {
                $endX++;
            }
            $wordElement->setAttribute('x', "{$word['x']}-" . ($endX - 1));
            $wordElement->setAttribute('y', $word['y']);
        } else {
            $endY = $word['y'];
            while ($endY <= $height && !empty($_POST["cell-" . $word['x'] . "-$endY"])) {
                $endY++;
            }
            $wordElement->setAttribute('x', $word['x']);
            $wordElement->setAttribute('y', "{$word['y']}-" . ($endY - 1));
        }

        // Check if the word has a solution provided
        $solutionKey = "{$word['x']}-{$word['y']}";
        if (isset($_POST["solution-$solutionKey"]) && !empty($_POST["solution-$solutionKey"])) {
            $wordElement->setAttribute('solution', strtoupper($_POST["solution-$solutionKey"]));
        }

        $crossword->appendChild($wordElement);
    }

    // Process across clues
    $across = $xml->createElement('clues');
    $across->setAttribute('ordering', 'normal');
    $acrossTitle = $xml->createElement('title', 'Across');
    $across->appendChild($acrossTitle);
    $crossword->appendChild($across);

    $acrossClueIndex = 0;
    foreach ($words as $index => $word) {
        if ($word['direction'] == 'across' && $acrossClueIndex < count($acrossClues)) {
            $clue = $xml->createElement('clue', htmlspecialchars(trim($acrossClues[$acrossClueIndex])));
            $clue->setAttribute('word', $word['id']);
            $clue->setAttribute('number', $numberedCells[$word['x'] . "-" . $word['y']]);
            $across->appendChild($clue);
            $acrossClueIndex++;
        }
    }

    // Process down clues
    $down = $xml->createElement('clues');
    $down->setAttribute('ordering', 'normal');
    $downTitle = $xml->createElement('title', 'Down');
    $down->appendChild($downTitle);
    $crossword->appendChild($down);

    $downClueIndex = 0;
    foreach ($words as $index => $word) {
        if ($word['direction'] == 'down' && $downClueIndex < count($downClues)) {
            $clue = $xml->createElement('clue', htmlspecialchars(trim($downClues[$downClueIndex])));
            $clue->setAttribute('word', $word['id']);
            $clue->setAttribute('number', $numberedCells[$word['x'] . "-" . $word['y']]);
            $down->appendChild($clue);
            $downClueIndex++;
        }
    }

    // Save XML to a variable
    $xmlString = $xml->saveXML();

    // Send the XML file as a downloadable response
    header('Content-Type: application/xml');
    $currentDate = date('Ymd'); // This will give you the date in the format YYYY-MM-DD
    // header('Content-Disposition: attachment; filename="crossy-' . $directoryName . '-' . $currentDate . '.xml"');
    header('Content-Disposition: attachment; filename="' . $currentDate . '-crossy-' . $directoryName . '.xml"');

    echo $xmlString;
    exit();
}
