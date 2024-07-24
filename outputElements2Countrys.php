<?php
$countries = [
    'United States',
    'Canada',
    'United Kingdom',
    'Australia',
    'Germany',
    'France',
    'Spain',
    'Italy',
    'Japan',
    'China'
];
$search = '';
$filteredCountries = $countries;
if (isset($_POST['search']))
{
    $search = htmlspecialchars($_POST['search']);
    if ($search !== '')
    {
        $filteredCountries = array_filter($countries, function($country) use ($search)
        {
            return stripos($country, $search) !== false;
        });
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .highlight
    {
        font-weight: bold;
        color: red;
    }
</style>
<body>
<form method="post">
    <input type="text" name="search" value="<?php echo $search; ?>" placeholder="Enter country name">
    <button type="submit" name="submit">Search</button>
</form>

<ul>
    <?php foreach ($filteredCountries as $country): ?>
        <?php
        if ($search)
        {
            $highlighted = preg_replace("/($search)/i", "<span class='highlight'>$1</span>", $country);
        }
        else
        {
            $highlighted = $country;
        }
        ?>
        <li><?php echo $highlighted; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>