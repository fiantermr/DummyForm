<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <form class="">
        <div class="title">
            <h2>Personal Details</h2>
        </div>
        <div class="half">
            <div class="item">
                <label>Wanted Job Title<i class="fa fa-question-circle"></i></label>
                <input type="text" required value="">
            </div>
            <div class="item">
                <div class="avatar"></div>
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label>First Name</label>
                <input type="text" required value="">
            </div>
            <div class="item">
                <label>Last Name</label>
                <input type="text" required value="">
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label>Email</label>
                <input type="text" required value="">
            </div>
            <div class="item">
                <label>Phone</label>
                <input type="number" required value="">
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label>Country</label>
                <select class="country">
                    <option>Select Country</option>
                    <option>Indonesia</option>
                    <option>Australia</option>
                    <option>Amerika Serikat</option>
                    <option>Germany</option>
                </select>
            </div>
            <div class="item">
                <label>City</label>
                <select class="city">
                    <option>Select City</option>
                    <option>Jakarta</option>
                    <option>Bekasi</option>
                    <option>Depok</option>
                    <option>Bandung</option>
                </select>
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label>Address</label>
                <input type="text" required value="">
            </div>
            <div class="item">
                <label>Postal Code</label>
                <input type="number" required value="">
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label>Driving License<i class="fa fa-question-circle"></i></label>
                <input type="text" required value="">
            </div>
            <div class="item">
                <label>Nationality<i class="fa fa-question-circle"></i></label>
                <input type="text" required value="">
            </div>
        </div>
        <div class="half">
            <div class="item">
                <label>Place of Birth</label>
                <input type="text" required value="">
            </div>
            <div class="item">
                <label>Date of Birth<i class="fa fa-question-circle"></i></label>
                <input type="date" required value="">
            </div>
        </div>
        <br>
        <div class="title">
            <h2>Profesional Summary</h2>
        </div>
        <p>Write 2-4 short & energetic sentences to interest the reader! Mention your role, experience & most importantly - your
            biggest achievment, best qualities and skills
        </p>
        <br>
        <textarea type="textarea"></textarea>
        <br>
        <br>
        <div class="title">
            <h2>Employment History</h2>
            <p>Show your relevant experience (last 10 years). Use bullet points to note your achievment. If possible - use numbers/facts
               (Achievment X, measured by Y, by doing Z) 
            </p>
            <p style="color: #00b4d8; cursor:pointer" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                + Add Employment
            </p>
        </div>
        <div class="title">
            <h2>Education</h2>
            <p>A varied Education on your resume sums up the value that your learnings and background will bring to job
            </p>
            <p style="color: #00b4d8; cursor:pointer" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                + Add Education
            </p>
        </div>
        <div class="title">
            <h2>Skills</h2>
            <p>Add your skill based on your experience
            </p>
            <p style="color: #00b4d8; cursor:pointer" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                + Add Skills
            </p>
        </div>
    </form>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</body>

</html>