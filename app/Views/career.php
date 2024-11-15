

    <style>
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 150px;
            padding: 20px;
            border: none;
            border-radius: 10px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
   <br /><br />
   <div class="speciality ">
        <div class="container">
            <div class="row align-items-center mb-n60">
                <div class="col-lg-6 mb-60 wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: .5s; animation-delay: 0.01s; animation-name: fadeIn;">
                    <div class="speciality-image">
                        <div class="speciality-image-inner">
                            <img class="js-tilt" src="images/speciality/speciality.png" alt="speciliity" style="will-change: transform; transform: perspective(3000px) rotateX(0deg) rotateY(0deg); transition: 4000ms cubic-bezier(0.03, 0.98, 0.52, 0.99);">
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 mb-60 wow fadeIn" fadeIndata-wow-duration=".01s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeIn;">
                    <!-- Heading Start -->
                    <div class="heading-one">
                        <span class="heading-one-subtitle">Work Culture</span>
                        <h2 style="font-size: 2.5em;" class="heading-one-title">Innovative, Collaborative & Culturally Diverse Team
                        </h2>
                        <p>At Jaguar Steel and Coal Pte Ltd., we believe in the power of teamwork and continuous improvement. Our collaborative environment fosters innovation and encourages each team member to contribute ideas and solutions, driving our collective success.
<br /><br />
Our team’s cultural diversity is a key asset, with members fluent in languages such as French, Spanish, Russian, Polish, Mandarin, and Ukrainian. This multilingual capability enhances our global operations and strengthens our interactions across different markets.

                    </p>
                    </div>
                    <!-- Heading End -->
                   
                </div>
            </div>
        </div>
        <div class="speciality-shape scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: inherit;">
            <img data-depth="0.20" class="shape shape1" src="images/speciality/shape1.png" alt="shape" style="transform: translate3d(-19.2px, -6.4px, 0px);">
            <img data-depth="0.20" class="shape shape2" src="images/speciality/shape2.png" alt="shape" style="transform: translate3d(-19.2px, -6.4px, 0px);">
        </div>
    </div>
    <br /><br />
     <div class="container mt-5 mb-5">
     <div class="row">
        <div class="col-sm-12">
        <div class="heading-one">
                        <span class="heading-one-subtitle">Apply Now</span>
                        <h2 class="heading-one-title">Join Our Team!</h2>
                    </div>
        </div>
     </div>  <br /><br />
     <div class="row">
   
            <div class="col-md-6 sm-12">
            <form action="/submit_application" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="mobile">Mobile Number:</label><br>
            <input type="tel" id="mobile" name="mobile" required><br><br>

            <label for="current_ctc">Current CTC (Salary):</label><br>
            <input type="text" id="current_ctc" name="current_ctc" required><br><br>

            <label for="notice_period">Notice Period (Current Company):</label><br>
            <input type="text" id="notice_period" name="notice_period" required><br><br>


        <label for="resume">Upload Resume/CV (PDF only):</label><br>
        <input type="file" id="resume" name="resume" accept="application/pdf" required><br><br>
            </div>
      
            <div class="col-md-6 sm-12">
            <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

 

        <label for="current_company">Current Company:</label><br>
        <input type="text" id="current_company" name="current_company" required><br><br>

     

        <label for="expected_ctc">Expected CTC (Salary):</label><br>
        <input type="text" id="expected_ctc" name="expected_ctc" required><br><br>


        <label for="position">Position:</label><br>
        <input type="text" id="position" name="position" required><br><br>
            </div>
        <button type="submit" class="btn btn-style-one">
            Apply Now
        </button>

    </form>
        </div>
     </div>