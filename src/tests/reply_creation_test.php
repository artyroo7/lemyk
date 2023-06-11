use PHPUnit\Framework\TestCase;

class ReplyCreatorTest extends TestCase
{
    public function testValidReplyCreation()
    {
        // Arrange
        $replyCreator = new ReplyCreator();
        $replyText = "This is a test comment";
        $threadId = 1;
        $parentCommentId = 1;
        
        // Act
        $result = $replyCreator->createReply($replyText, $threadId, $parentCommentId, null);

        // Assert
        $this->assertTrue($result);
    }

    public function testInvalidReplyCreationWithoutText()
    {
        // Arrange
        $replyCreator = new ReplyCreator();
        $replyText = "";
        $threadId = 1;
        $parentCommentId = 1;

        // Act & Assert
        $this->expectException(InvalidCommentException::class);
        $replyCreator->createReply($replyText, $threadId, $parentCommentId, null);
    }
}
