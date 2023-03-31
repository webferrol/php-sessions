<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <script>
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '8a9dd99e17msh046941ec72a61dep10f4d1jsn85e252bd2d50',
		'X-RapidAPI-Host': 'countries-cities.p.rapidapi.com'
	}
};

fetch('https://countries-cities.p.rapidapi.com/location/country/list', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));

  </script>
</body>
</html>