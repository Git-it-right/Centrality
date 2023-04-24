<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    // Retrieve form data
    $team1 = $_POST[ 'team1' ];
    $score1 = $_POST[ 'score1' ];
    $team2 = $_POST[ 'team2' ];
    $score2 = $_POST[ 'score2' ];

    // Load scores JSON file
    $scores = json_decode( file_get_contents( 'scores.json' ), true );

    // Add new match result
    $scores[] = [
        'team1' => $team1,
        'score1' => $score1,
        'team2' => $team2,
        'score2' => $score2
    ];

    // Save updated scores JSON file
    file_put_contents( 'scores.json', json_encode( $scores ) );

    header( 'Location: home.php' );
    exit;

}
?>
