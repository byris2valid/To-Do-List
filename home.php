<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <style>

        .profile {
            display: flex;
            flex-direction: column;
            top: 0;
            left: 0;
            padding: 20px;
            border: 3px solid black;
            border-radius: 5px;
            width: 30%;
        }

        .profile p {
            margin-left: 30px;
        }

       

    </style>
</head>

<body>
    <?php

    $profile = [
        'name' => 'Byris Fells',
        'age' => 18,
        'Email' => 'byrisfells@gmail.com',
        'Github' => 'https://github.com/byris2valid',
        'Area of experience' => 'Web Development, Game Development, App Development', 
        'Technical skills' => 'Javascript, HTML & Css, Flutter: Dart, C++, Git'  
    ]
?>


        <div class="profile">
            <?php foreach ($profile as $key => $value): ?>
                <p><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></p>
                <?php endforeach; ?>
            </div>
</body>
</html>