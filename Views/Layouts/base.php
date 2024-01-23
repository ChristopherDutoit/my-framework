<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$page_description; ?>">
    <title><?=$page_title;?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors:{
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

</head>
<body>
    <?= $page_content; ?>
</body>
</html>