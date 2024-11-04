<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARIF</title>
</head>
<body>
    <form>
        <h1>Resume Builder</h1>
        <fieldset>
            <legend>Personal Information</legend>
            <table>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="name" placeholder="John Doe" ></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email"  placeholder="Email@example.com"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="tel" name="phone"  placeholder="123-456-7890" ></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="date" ></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                            <label>
                            <input type="radio" name="gender" > Male
                            </label>
                            <label>
                            <input type="radio" name="gender" > Female
                            </label>
                            <label>
                            <input type="radio" name="gender" > Other
                            </label>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="Address" id="Address" rows="3" cols="20" placeholder="123 Main St, City, Country"></textarea></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Education</legend>
            <table>
            <tr>
                <td>Higher Degree:</td>
                <td>
                    <select name="degree_type" >
                        <option value="">Select Degree</option>
                        <option value="SSC">SSC</option>
                        <option value="HSC">HSC</option>
                        <option value="BSc">BSc</option>
                        <option value="MSc">MSc</option>
                        <option value="Phd">Phd</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Institution:</td>
                <td><input type="text" placeholder="University Name"></td>
            </tr>
            <tr>
                <td>Year of Graduation:</td>
                <td><input type="text"size="8"></td>
            </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Work Experience</legend>
            <table>
                <tr>
                    <td>Company Name:</td>
                    <td><input type="text" placeholder="Company Name"></td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td><input type="text" placeholder="Job Title"></td>
                </tr>
                <tr>
                    <td>Duration</td>
                    <td><input type="month"></td>
                    <td>to</td>
                    <td><input type="month"></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Skills</legend>
            <table>
                <tr>
                    <td>Skills:</td>
                    <td>
                            <label >
                            <input type="checkbox" name="HTML"> HTML
                            </label>
                            <label >
                            <input type="checkbox" name="CSS"> CSS
                            </label>
                            <label >
                            <input type="checkbox" name="JavaScript"> JavaScript
                            </label>
                            <label >
                            <input type="checkbox" name="Python"> Python
                            </label>
                            <label >
                            <input type="checkbox" name="Java"> Java
                            </label>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <table>
                <tr>
                    <td><input type="submit" value="Submit Resume"></td>
                    <td><input type="reset" value="Clear Form"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>