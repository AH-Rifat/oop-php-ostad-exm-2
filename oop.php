<?php
class Book
{
  // Add properties as Private
  private $title;
  private $availableCopies;

  public function __construct($title, $availableCopies)
  {
    // Initialize properties
    $this->title = $title;
    $this->availableCopies = $availableCopies;
  }


  // Add getTitle method
  public function getTitle()
  {
    return $this->title;
  }

  // Add getAvailableCopies method
  public function getAvailableCopies()
  {
    return $this->availableCopies;
  }

  // Add borrowBook method
  public function borrowBook()
  {
    if ($this->availableCopies > 0) {
      return $this->availableCopies--;
    } else {
      $this->availableCopies = 0;
      echo "Sorry, '{$this->title}' is out of stock.\n\n";
    }
  }

  // Add returnBook method
  public function returnBook()
  {
    return $this->availableCopies++;
  }
}


class Member
{
  // Add properties as Private
  private $name;

  public function __construct($name)
  {
    // Initialize properties
    $this->name = $name;
  }

  // Add getName method
  public function getName()
  {
    return $this->name;
  }

  // Add borrowBook method
  public function borrowBook($book)
  {
    return $book->borrowBook();
  }

  // Add returnBook method
  public function returnBook($book)
  {
    return $book->returnBook();
  }
}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// Create 2 books with the following properties

$book1 = new Book('The Great Gatsby', 5);
$book2 = new Book('To Kill a Mockingbird', 3);

// Create 2 members with the following properties

$member1 = new Member('John Doe');
$member2 = new Member('Jane Smith');

// Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print Available Copies with their names:
print("Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n");
print("Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n");
