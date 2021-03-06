<?php

$factory('Post', 'scheduled_post', [
    'title' => 'Scheduled Post Title'
]);

$factory('Post', [
    'author_id' => 'factory:Person',
    'title' => 'Post Title'
]);

$factory('Post', 'post_by_existing_person', [
    'author_id' => 'model:Person',
    'title' => 'Post Title'
]);

$factory('Comment', function($faker) {

    return [
        'post_id' => 'factory:Post',
        'body' => $faker->word
    ];
});

$factory('Comment', 'comment', []);

$factory('Comment', 'comment_for_post_by_person', [
    'post_id' => 'factory:Post',
    'body' => $faker->word
]);

$factory('Comment', 'comment_for_existing_post', [
    'post_id' => 'model:Post',
    'body' => $faker->word
]);

$factory('Comment', 'comment_for_existing_post_by_existing_person', [
    'post_id' => 'model:post_by_existing_person',
    'body' => $faker->word
]);

$factory('Foo', function($faker) {
    return [
        'name' => $faker->word
    ];
});

$factory('Message', [
    'contents' => $faker->sentence,
    'sender_id' => 'factory:Person',
    'receiver_id' => 'factory:Person',
]);

$factory('Message', 'message_between_existing_people', [
    'contents' => $faker->sentence,
    'sender_id' => 'model:Person',
    'receiver_id' => 'model:Person',
]);

$factory('Message', 'message_between_existing_and_new_people', [
    'contents' => $faker->sentence,
    'sender_id' => 'factory:Person',
    'receiver_id' => 'model:Person',
]);

$factory('Person', [
    'name' => $faker->name
]);
