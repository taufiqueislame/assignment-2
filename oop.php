<?php

class Book {
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // TODO: Add borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true; // Book borrowed successfully
        } else {
            return false; // No copies available
        }
    }

    // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // TODO: Add properties as Private
    private $name;

    public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    public function getName() {
        return $this->name;
    }

    // TODO: Add borrowBook method
    public function borrowBook($book) {
        // Attempt to borrow the book
        if ($book->borrowBook()) {
            echo $this->name . " borrowed '" . $book->getTitle() . "'\n";
        } else {
            echo $this->name . " could not borrow '" . $book->getTitle() . "' (No copies available)\n";
        }
    }

    // TODO: Add returnBook method
    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " returned '" . $book->getTitle() . "'\n";
    }
}

// Usage

// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5
$book1 = new Book("The Great Gatsby", 5);

// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
$member1 = new Member("John Doe");

// Member 2 - Name: Jane Smith
$member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1); // John Doe borrows The Great Gatsby
$member2->borrowBook($book2); // Jane Smith borrows To Kill a Mockingbird

// TODO: Print Available Copies with their names
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

?>
