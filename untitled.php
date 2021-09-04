<script>
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
      document.getElementById(elemId).innerHTML = hintMsg;
    }

    // Defining a function to validate form 
    function validateForm() {
      // Retrieving the values of form elements 
      var movie_name = document.Addmovie.movie_name.value;
      var Description = document.Addmovie.Description.value;
      var Language = document.Addmovie.Language.value;
      var Launch_date = document.Addmovie.Launch_date.value;
      var duration_time = document.Addmovie.duration_time.value;
      var Screen_no = document.Addmovie.Screen_no.value;
      var Image = document.Addmovie.Image.value;
      var city = document.Addmovie.city.value;
      var amount = document.Addmovie.amount.value;
      var status = document.Addmovie.status.value;
      // Defining error variables with a default value
      var movie_nameErr = DescriptionErr = LanguageErr = Launch_dateErr = duration_timeErr = Screen_noErr = ImageErr = cityErr = amountErr = statusErr = true;

      // Validate name
      if (movie_name == "") {
        printError("movie_nameErr", "Please enter your movie_name");
      } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(movie_name) === false) {
          printError("movie_nameErr", "Please enter a valid movie_name");
        } else {
          printError("movie_nameErr", "");
          movie_nameErr = false;
        }
      }

      // Validate email address
      if (Description == "") {
        printError("DescriptionErr", "Please enter your Description");
      } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(Description === false) {
            printError("DescriptionErr", "Please enter a valid Description");
          } else {
            printError("DescriptionErr", "");
            DescriptionErr = false;
          }
        }

        // Validate Language number
        if (Language == "") {
          printError("LanguageErr", "Please enter your Language ");
        } else {
          var regex = /^\S+@\S+\.\S+$/;
          if (regex.test(Language) === false) {
            printError("LanguageErr", "Please enter a valid Language ");
          } else {
            printError("LanguageErr", "");
            LanguageErr = false;
          }
        }

        // Validate Launch_date
        if (Launch_date == "Select") {
          printError("Launch_dateErr", "Please select your Launch_date");
        } else {
          printError("Launch_dateErr", "");
          Launch_dateErr = false;
        }

        // Validate duratiion_time
        if (duration_time == "") {
          printError("duration_timeErr", "Please select your duration_time");
        } else {
          printError("duration_timeErr", "");
          duration_timeErr = false;
        }
        if (Screen_no == "") {
          printError("Screen_noErr", "Please select your Screen_no");
        } else {
          printError("Screen_noErr", "");
          Screen_noErr = false;
        }
        if (Image == "") {
          printError("ImageErr", "Please select  upload valid Image");
        } else {
          printError("ImageErr", "");
          ImageErr = false;
        }
        if (city == "") {
          printError("cityErr", "Please select your city");
        } else {
          printError("cityErr", "");
          cityErr = false;
        }
        if (amount == "") {
          printError("amountErr", "Please select  valid amount ");
        } else {
          printError("amountErr", "");
          amountErr = false;
        }
        if (status == "") {
          printError("statusErr", "Please select  valid status");
        } else {
          printError("statusErr", "");
          statusErr = false;
        }




        // Prevent the form from being submitted if there are any errors
        if ((movie_nameErr || DescriptionErr || LanguageErr || Launch_dateErr || duration_timeErr || Screen_noErr || ImageErr || cityErr || amountErr || statusErr) == true) {
          return false;
        } else {
          // Creating a string from input data for preview
          var dataPreview = "You've entered the following details: \n" +
            "movie_name: " + movie_name + "\n" +
            "Description: " + Description + "\n" +
            "Language: " + Language + "\n" +
            "Launch_date: " + Launch_date + "\n" +
            "duratiion_time: " + duratiion_time + "\n";
          "Screen_no: " + Screen_no + "\n";
          "Image: " + Image + "\n";
          "city: " + city + "\n";
          "amount: " + amount + "\n";
          "status: " + status + "\n";





          // Display input data in a dialog box before submitting the form
          alert(dataPreview);
        }
      };
  </script>
