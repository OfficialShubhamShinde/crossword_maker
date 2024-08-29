<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/path/to/tailwind.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Welcome | ASDR-Crossword Maker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/img/Favicon-asdr.png" rel="icon">
</head>

<style>
    .grid-container {
        max-width: 100%;
        overflow-x: auto;
        /* Enable horizontal scrollbar */
        overflow-y: hidden;
        /* Hide vertical scrollbar */
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(10, 60px);
        /* Adjust column width */
        grid-template-rows: repeat(10, 60px);
        /* Adjust row height */
        gap: 1px;
        /* Adjust gap between cells */
    }

    .grid-cell {
        width: 60px;
        /* Adjust cell width */
        height: 60px;
        /* Adjust cell height */
        border: 1px solid #000;
        text-align: center;
        font-size: 20px;
        /* Adjust font size for better visibility */
        padding: 5px;
        /* Adjust padding for better cell visibility */
    }
</style>

<body>
    <div class="banner-section" style="background-color: rgb(14,22,41); color: white;">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="img/ASDR LOGO.png" width="100px" height="80px" alt="">
                    </a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 link-secondary text-white mr-4"><b>Home</b></a></li>
                    <li><a href="https://asdrinfotech.com/" class="nav-link px-2 text-white">About</a></li>
                    <li></li>
                </ul>

                <div class="col-md-3 text-end">
                    <!-- <button type="button" class="btn btn-outline-primary me-2 text-white">Sign-in</button> -->
                    <button type="button" class="btn btn-outline-primary me-2 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Contact Sales</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Contact Sales</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="ContactSale.php" method="POST">
                                    <div class="modal-body">

                                        <div class="row mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email ID" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" class="form-control" placeholder="Contact Number" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message..."></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="Submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <div class="px-4  my-5 text-center">
            <h1 class="display-5 fw-bold text-white">Create Digital Crosswords with ASDR Infotech</h1>
            <div class="col-lg-8 mx-auto">
                <p class="lead mb-4 mt-3">
                    At ASDR Infotech, we empower crossword enthusiasts and creators to design and generate their own interactive crosswords effortlessly. Our platform allows you to create intricate puzzles, generate XML files, and seamlessly import them to display the puzzle grid on any compatible platform. With a focus on user-friendly design and functionality, ASDR Infotech ensures that your puzzle creation experience is smooth, efficient, and enjoyable. We offer a 10-day free trial, after which you can click on "Contact Sales" to extend your access and unlock additional features. Join us today and take your crossword crafting to the next level, making it accessible and engaging for your audience. Customer satisfaction and exceptional service are our top priorities, ensuring you have a great experience every step of the way.
                </p>
                <br> <br>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        Contact Sales
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <section class="text-gray-600 body-font relative flex justify-center items-center h-screen">
                                        <div class="absolute inset-0 bg-gray-300">
                                            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43069407.12990529!2d-135.77916323433257!3d48.786701167657135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1696872092459!5m2!1sen!2sin" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                                        </div>

                                        <form action="selectService.php" method="POST">
                                            <div class="lg:w-8/9 md:w-8/9 bg-white rounded-lg p-4 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                                                <div class="relative  flex items-center">
                                                    <p class="mr-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-crosshair" viewBox="0 0 16 16">
                                                            <path d="M8.5.5a.5.5 0 0 0-1 0v.518A7.001 7.001 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7.001 7.001 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7.001 7.001 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7.001 7.001 0 0 0 8.5 1.018V.5Zm-6.48 7A6.001 6.001 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6.001 6.001 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6.002 6.002 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6.001 6.001 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1h-.48ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                                        </svg></p>
                                                    <!-- <input type="text" id="name" name="name"
                                                        placeholder="Search for an address..."
                                                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                                        required> -->
                                                    <select id="locationSelect" class="form-select" aria-label="Default select example">
                                                        <option selected>Select your location</option>
                                                        <option value="Pune">Calgary</option>
                                                        <option value="Satara">British Columbia</option>
                                                        <option value="Mumbai">Hamilton</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br> <br> <br> <br>
            </div>
        </div>
    </div>

    <div class="container border rounded mb-5 p-5" style="margin-top: -120px; background-color: white;">
        <div class="card-body">
            <form class="forms-sample" method="POST" action="generate_xml.php" enctype="multipart/form-data">
                <h6 class=""><b>Create Puzzle</b></h6>
                <p class="text-muted">Simply input your desired puzzle width and height to get started.</p>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="width">Puzzle Width</label>
                            <div class="input-group mt-1">
                                <input type="number" class="form-control" placeholder="Enter number of across cells" name="width" id="width" min="1" max="100" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="height">Puzzle Height</label>
                            <div class="input-group mt-1">
                                <input type="number" class="form-control" placeholder="Enter number of down cells" name="height" id="height" min="1" max="100" required>
                            </div>
                        </div>
                        <div class="col-md-2 align-self-end">
                            <button type="button" class="btn btn-primary w-100" onclick="createGrid()">Create Grid</button>
                        </div>
                    </div>
                </div>
                <div id="grid-container" class="mt-3 grid-container"></div>
                <div id="clues-container" class="mt-3"></div>
            </form>
        </div>
    </div>

    <div class="footer" style="background-color: rgb(14,22,41); color: white;">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-white">© 2024 <a href="https://asdrinfotech.com/" style="text-decoration: none; color: white;">ASDR Infotech</a>, All rights reserved.</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="gray" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="gray" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="gray" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Get a reference to the select element
        const locationSelect = document.getElementById("locationSelect");

        // Add an event listener to the select element
        locationSelect.addEventListener("change", function() {
            // Get the selected value
            const selectedValue = locationSelect.value;

            // Get the form element
            const form = document.querySelector("form");

            // Set the action URL and method (POST) for the form
            form.action = "selectService.php";
            form.method = "POST";

            // Create a hidden input element to pass the selected value
            const input = document.createElement("input");
            input.type = "hidden";
            input.name = "selectedLocation";
            input.value = selectedValue;

            // Append the hidden input to the form
            form.appendChild(input);

            // Submit the form
            form.submit();
        });
    </script>

    <script>
        function createGrid() {
            const width = document.getElementById('width').value;
            const height = document.getElementById('height').value;
            const gridContainer = document.getElementById('grid-container');
            const cluesContainer = document.getElementById('clues-container');

            gridContainer.innerHTML = '';
            cluesContainer.innerHTML = '';

            // Create grid
            const grid = document.createElement('div');
            grid.classList.add('grid');
            grid.style.gridTemplateColumns = `repeat(${width}, 60px)`; // Adjust column width
            grid.style.gridTemplateRows = `repeat(${height}, 60px)`; // Adjust row height

            for (let y = 1; y <= height; y++) {
                for (let x = 1; x <= width; x++) {
                    const cell = document.createElement('input');
                    cell.type = 'text';
                    cell.maxLength = 1;
                    cell.classList.add('grid-cell');
                    cell.name = `cell-${x}-${y}`;
                    grid.appendChild(cell);
                }
            }

            gridContainer.appendChild(grid);

            // Create clues input fields
            cluesContainer.innerHTML = `
        <h4 class="card-title mb-3 mt-5">Create Clues</h4>
        <p class="text-muted">Make sure do not change the sequence of clues it will affect your entire grid logic</p>
        <div class="row">
            <div class="col-md-6">
                <label for="width">Across</label>
                <textarea class="form-control" id="across-clues" name="across-clues" rows="5" required></textarea>
            </div>
            <div class="col-md-6">
                <label for="height">Down</label>
                <textarea class="form-control" id="down-clues" name="down-clues" rows="5" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2 mt-3">
                    Generate XML
                </button>
                <button class="btn btn-light mt-3" type="reset" onclick="location.reload();">Cancel</button>
        `;
        }
    </script>

</body>

</html>