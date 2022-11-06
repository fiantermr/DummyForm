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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
                <input type="email" required value="">
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
        <textarea class="textarea1" style="color:black" type="textarea" placeholder="Write your summary in here"></textarea>
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
            <div id="education">
            </div>
            <p style="color: #00b4d8; cursor:pointer; margin-top: 10px" href="#" data-toggle="modal" data-target="#ModalCenter">
                + Add Education
            </p>
        </div>
        <div class="title">
            <h2>Skills</h2>
            <p>Add your skill based on your experience
            </p>
            <div id="skills">
            </div>
            <p style="color: #00b4d8; cursor:pointer" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                + Add Skills
            </p>
        </div>
    </form>
    <!-- Education -->
    <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black" id="exampleModalLongTitle">Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label style="color:black">School</label>
                    <br>
                    <input placeholder="President University" class="text1" id="school" type="text" required value="">
                    <label style="color:black">Degree</label>
                    <br>
                    <input placeholder="Bachelor Computer Science" class="text1" id="degree" type="text" required value="">
                    <label style="color:black">Duration</label>
                    <br>
                    <input placeholder="2018-2022" class="text1" id="dursa" type="text" required value="">
                    <label style="color:black">City</label>
                    <br>
                    <input placeholder="Jakarta" class="text1" id="city" type="text" required value="">
                    <label style="color:black">Description</label>
                    <textarea class="textarea2" style="color:black" id="e_desc" type="textarea" placeholder="Write your summary in here"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addeducation">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:black" id="exampleModalLongTitle">Skills</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="form2">
                    <label style="color:black">Skill</label>
                    <br>
                    <input placeholder="HTML" id="userskill" type="text" required value="">

                    <select class="city" id="experience" name="experience">
                        <option>Select Experience</option>
                        <option value="skillful">Skillful</option>
                        <option value="experienced">Experienced</option>
                        <option value="expert">Expert</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetForm()";>Close</button>
                    <button type="button" class="btn btn-primary" id="addskill">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $("#addskill").click(function() {
        var skill = $('#userskill').val();
        if (!skill) {
            return;
        }
        var exp = $('#experience').val();
        if (exp == "skillful") {
            console.log(exp)
            $("#skills").append(`<span class="badge badge-warning p-1 m-1">${skill} <input type="hidden" name="skill[] value="${skill}"/> <span class="removeskill" onClick="removeskill(this)" style="color:black; cursor:pointer">X</span></span>`)
        } else if (exp == "experienced") {
            $("#skills").append(`<span class="badge badge-success p-1 m-1">${skill} <input type="hidden" name="skill[] value="${skill}"/> <span class="removeskill" onClick="removeskill(this)" style="color:black; cursor:pointer">X</span></span>`)
        } else if (exp == "expert") {
            $("#skills").append(`<span class="badge badge-primary p-1 m-1">${skill} <input type="hidden" name="skill[] value="${skill}"/> <span class="removeskill" onClick="removeskill(this)" style="color:black; cursor:pointer">X</span></span>`)
        }
    });

    function removeskill(button) {
        $(button).parent().remove();
    }

    $("#addeducation").click(function() {
        var school = $('#school').val();
        var degree = $('#degree').val();
        var dursa = $('#dursa').val();
        var city = $('#city').val();
        var e_desc = $('#e_desc').val();
        if(!school){
            return;
        }
        if(!degree){
            return;
        }
        if(!dursa){
            return;
        }
        if(!city){
            return;
        }
        $("#education").append(`<div style="display: inline-block; border: 1px solid white; border-radius: 2px; padding: 5px; margin: 2px">
    <input type="hidden" name="school[]" value="${school}">
    <input type="hidden" name="degree[]" value="${degree}">
    <input type="hidden" name="dursa[]" value="${dursa}">
    <input type="hidden" name="city[]" value="${city}">
                <h3>${school}</h3>
                <h4>${degree} - (${dursa})</h4>
                <h5>${city}</h5>
                <h6>${e_desc}</h6
                    <br>
                <button type="button" class="btn btn-danger" onClick="removeskill(this)">Remove</button>
            </div>`)
        $('#school').val();
        $('#degree').val();
        $('#dursa').val();
        $('#city').val();
        $('#e_desc').val();
    })
</script>