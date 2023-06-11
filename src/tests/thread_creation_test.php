class ThreadCreationTest extends PHPUnit\Framework\TestCase
{
    public function testSuccessfulThreadCreation()
    {
        // Test data
        $_POST['title'] = 'Test Title';
        $_POST['category'] = '1';
        $_POST['description'] = 'Test Description';

        // Include your script
        include 'thread_creation.php';

        // Check output (this will depend on the actual output of your script)
        $this->expectOutputString(json_encode(array('success' => 'Успішно.')));
    }

    // Add more test methods to cover edge cases and different scenarios.
}
