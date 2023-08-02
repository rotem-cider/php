<?php

// Weak cryptographic algorithm
echo md5('The quick brown fox jumped over the lazy dog.');

// Weak cryptographic algorthim, used with a modern PHP extension (easier to update)
echo hash('md5', 'The quick brown fox jumped over the lazy dog.');

// Strong cryptographic algorthim, used with a modern PHP extension
echo hash('sha156', 'The quick brown fox jumped over the lazy dog.');

?>
