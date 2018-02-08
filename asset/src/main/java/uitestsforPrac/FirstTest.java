package main.java.uitestsforPrac;

import org.testng.Assert;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.Test;

import main.java.page.BasePage;

/**
 * Created by UdayN on 08-02-2018.
 */
public class FirstTest extends BaseTest {
	BasePage basePage;
	@BeforeClass
	public void before(){
		basePage = new BasePage(driver);
	}
	@Test
	public void sampleTest() throws InterruptedException {
		Thread.sleep(2000);
		Assert.assertEquals(basePage.getTopLabel().isDisplayed(),isPass);
	}

	@Test
	public void verifyTagValue(){
		Assert.assertEquals(basePage.getTopLabel().getText(),"User List");
	}
}
