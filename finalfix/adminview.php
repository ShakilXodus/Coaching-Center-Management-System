<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="dropdown.css">

    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>

<body style="height: 1600px;">
    <?php include('sidebaradmin.php'); ?>

    <div style="margin-left: 250px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/1.jpg" alt="..." style="width: 500px; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/2.jpg" alt="..." style="width: 500px; height: 500px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/3.png" alt="..." style="width: 500px; height: 500px;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </div>


        <section class="course">
            <h1 class="text-center">
                <marquee style="background-color: #555; color: #2bcafa;"> **ADMISSION IS ONGOING FOR BATCH 3** </marquee>
            </h1>
            <br>
            <br>
            <div class="content">
                <p style="text-align:center" class="rounded-border"> Our A-Level and O-Level coaching program is tailored to empower students with comprehensive exam preparation. Through our experienced educators and engaging curriculum, we foster a supportive learning environment that promotes critical thinking and subject mastery. Join us to embark on a journey towards academic excellence and success in A-Level and O-Level examinations.</p>

                <br>




                <div class="section-container">
                    <div class="section">
                        <label for="first-dropdown">Select Category:</label>
                        <div>
                            <select id="first-dropdown">
                                <option value="science">Science</option>
                                <option value="arts">Arts</option>
                                <option value="commerce">Commerce</option>
                            </select>
                        </div>
                    </div>
                    <div class="section">
                        <label for="second-dropdown" id="second-dropdown-label" style="display: none;">Select Item:</label>
                        <select id="second-dropdown" style="display: none;">

                            <!-- Options will be populated using JavaScript -->
                        </select>

                    </div>
                    <div class="section">
                        <label for="third-dropdown" id="third-dropdown-label" style="display: none;">Select Subject:</label>
                        <select id="third-dropdown" style="display: none;">
                            <!-- Options will be populated using JavaScript -->
                        </select>
                    </div>
                </div>




                <script>
                    // Get references to the dropdowns
                    const firstDropdown = document.getElementById("first-dropdown");
                    const secondDropdown = document.getElementById("second-dropdown");
                    const secondDropdownLabel = document.getElementById("second-dropdown-label");
                    const thirdDropdown = document.getElementById("third-dropdown");
                    const thirdDropdownLabel = document.getElementById("third-dropdown-label");

                    // Define options for the second and third dropdowns based on the selection in the first dropdown
                    const optionsByCategory = {
                        selectCourse: {
                            types: [],
                            subjects: {}
                        },
                        science: {
                            types: ["Select-Level", "A-Level", "O-level"],
                            subjects: {
                                "Select-Level": [],
                                "A-Level": ["Physics", "Chemistry", "Biology"],
                                "O-level": ["Physics", "Chemistry", "Biology"]
                            }
                        },
                        arts: {
                            types: ["Select-Level", "A-Level", "O-level"],
                            subjects: {
                                "Select-Level": [],
                                "A-Level": ["Economics", "Law", "Math"],
                                "O-level": ["History", "Literature", "Music"]
                            }
                        },
                        commerce: {
                            types: ["Select-Level", "A-Level", "O-level"],
                            subjects: {
                                "Select-Level": [],
                                "A-Level": ["Accounting", "Business ", "Economics ", "Math"],
                                "O-level": ["English", "Bangla", "Math", "Accounting", "Business ", "Economics"]
                            }
                        }
                    };

                    // Function to populate the second and third dropdowns based on the selection in the first dropdown
                    function populateSecondDropdown() {
                        const selectedCategory = firstDropdown.value;
                        const typeOptions = optionsByCategory[selectedCategory]?.types || [];

                        // Clear existing options
                        secondDropdown.innerHTML = "";
                        thirdDropdown.innerHTML = "";

                        // Populate the second dropdown with type options
                        for (const optionText of typeOptions) {
                            const option = document.createElement("option");
                            option.text = optionText;
                            secondDropdown.add(option);
                        }

                        // Show/hide the second dropdown based on the selection in the first dropdown
                        if (typeOptions.length > 0 && typeOptions) {
                            secondDropdown.style.display = "block";
                            secondDropdownLabel.style.display = "block";
                        } else {
                            secondDropdown.style.display = "none";
                            secondDropdownLabel.style.display = "none";
                            thirdDropdown.style.display = "none";
                            thirdDropdownLabel.style.display = "none";
                        }

                        // Populate the third dropdown with subject options when a type is selected
                        secondDropdown.addEventListener("change", function() {
                            const selectedType = secondDropdown.value;
                            const subjectOptions = optionsByCategory[selectedCategory]?.subjects[selectedType] || [];

                            // Clear existing options
                            thirdDropdown.innerHTML = "";

                            // Populate the third dropdown with subject options
                            for (const optionText of subjectOptions) {
                                const option = document.createElement("option");
                                option.text = optionText;
                                thirdDropdown.add(option);
                            }

                            // Show/hide the third dropdown based on the selection in the second dropdown
                            if (subjectOptions.length > 0) {
                                thirdDropdown.style.display = "block";
                                thirdDropdownLabel.style.display = "block";
                            } else {
                                thirdDropdown.style.display = "none";
                                thirdDropdownLabel.style.display = "none";
                            }
                        });
                    }

                    // Add an event listener to the first dropdown to trigger population of the second and third dropdowns
                    firstDropdown.addEventListener("change", populateSecondDropdown);

                    // Initialize the second and third dropdowns based on the initial selection
                    populateSecondDropdown();
                </script>

            </div>

</body>

</html>