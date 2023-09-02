 <?php
    $num = [1, 10, 12];
    echo $num[1];

    $colors = [
        10 => 'blue',
        20 => 'red',
        30 => 'green'
    ];

    echo $colors[10];

    $person = [
        'first name' => 'shakti',
        'last name' => 'mad',
        'email' => 'a@gmail.com'
    ];


    echo $person['first name'];


    $people = [
        [
        'first name' => 'shakti',
        'last name' => 'mad',
        'email' => 'a@gmail.com'
        ],

        [
            'first name' => 'rahul',
            'last name' => 'mad',
            'email' => 'a@gmail.com'
            ]
    ];

    echo $people[1]['first name'];

    var_dump(json_encode($people))




    ?>