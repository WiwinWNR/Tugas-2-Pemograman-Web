<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> From Input</h1>
<form>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  <br>
  <br>
  
  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob" required>
  <br><br>
  
  <label for="job">Choose a job:</label>
  <select id="job" name="job" onchange="calculateAgeAndSalary()">
    <option value="">Select a job</option>
    <option value="operator-produksi">Operator Produksi</option>
    <option value="quality-control">Quality Control</option>
    <option value="supervisior">Supervisior</option>
  </select>
  <br><br>
  
  <button type="button" onclick="calculateAgeAndSalary()">Calculate Age and Salary</button>
</form>

<div id="output"></div>

<script>
function calculateAgeAndSalary() {
  const name = document.getElementById('name').value;
  const dob = document.getElementById('dob').value;
  const job = document.getElementById('job').value;
  
  const age = calculateAgeFromDob(dob);
  const salary = calculateSalaryFromJob(job);
  
  const output = document.getElementById('output');
  output.innerHTML = `Name: ${name}<br>
                       Date of Birth: ${dob}<br>
                       Job: ${job}<br>
                       Age: ${age}<br>
                       Salary: ${salary}`;
}

function calculateAgeFromDob(dob) {
  const dobDate = new Date(dob);
  const todayDate = new Date();
  const ageInMilliseconds = todayDate - dobDate;
  const ageInYears = ageInMilliseconds / 1000 / 60 / 60 / 24 / 365;
  return Math.floor(ageInYears);
}

function calculateSalaryFromJob(job) {
  let salary;
  
  switch (job) {
    case 'operator-produksi':
      salary = 6000000;
      break;
    case 'quality-control':
      salary = 6200000;
      break;
    case 'supervisior':
      salary = 700000;
      break;
    default:
      salary = '';
  }
  
  return salary;
}
</script>

</body>
</html>