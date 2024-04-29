<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Quiz Results</h1>
        <?php
        // Define correct answers
        $correct_answers = array(
            'q1' => 'c', // Question 1
            'q2' => 'a', // Question 2
            'q3' => 'a', // Question 3
            // Add more correct answers here
        );

        // Initialize variables
        $score = 0;
        $total_questions = count($correct_answers);

        // Check answers
        foreach ($correct_answers as $question => $answer) {
            if (isset($_POST[$question])) {
                if ($_POST[$question] == $answer) {
                    $score++;
                }
            }
        }

        // Display result
        echo "<p>Your score: $score out of $total_questions</p>";
        ?>
    </div>
</body>
</html>
