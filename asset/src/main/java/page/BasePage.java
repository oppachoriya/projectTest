package main.java.page;

import lombok.Getter;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;
import org.openqa.selenium.support.PageFactory;

/**
 * Created by UdayN on 08-02-2018.
 */
public class BasePage {
	WebDriver driver;

	public BasePage(WebDriver driver){
		this.driver = driver;
		driver.navigate().to("file:///C:/Users/UdayN/Desktop/file1.html");
		PageFactory.initElements(driver,this);
	}

	@Getter @FindBy(tagName = "h3")
	WebElement topLabel;

}
