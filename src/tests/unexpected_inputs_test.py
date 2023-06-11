from selenium import webdriver
from selenium.webdriver.common.keys import Keys

class ReplyCreatorSecurityTest(unittest.TestCase):

    def setUp(self):
        self.driver = webdriver.Firefox()

    def tearDown(self):
        self.driver.close()

    def test_injection_attempt(self):
        driver = self.driver
        driver.get("http://yourwebsite.com/reply_form")
        reply_field = driver.find_element_by_name("replyText")
        reply_field.send_keys("' OR '1'='1'; -- ")
        submit_button = driver.find_element_by_name("submit")
        submit_button.click()
        error_message = driver.find_element_by_class_name("error-message")
        self.assertIn("Invalid input", error_message.text)

    def test_session_hijacking_attempt(self):
        driver = self.driver
        driver.get("http://yourwebsite.com/reply_form")
        driver.add_cookie({'name': 'PHPSESSID', 'value': '1234567890'})
        driver.refresh()
        error_message = driver.find_element_by_class_name("error-message")
        self.assertIn("Invalid session", error_message.text)

if __name__ == "__main__":
    unittest.main()
