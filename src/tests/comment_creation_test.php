class CommentCreationTest extends PHPUnit\Framework\TestCase
{
    public function testSuccessfulCommentCreation()
    {
        // Test data
        $_POST['commentText'] = 'Test comment text';
        $_POST['threadId'] = '1';

        // Include your script
        include 'comment_creation.php';

        // Check output (this will depend on the actual output of your script)
        $this->expectOutputString(json_encode(array('success' => 'Успішно.')));
    }

    // Add more test methods to cover edge cases and different scenarios.
}
