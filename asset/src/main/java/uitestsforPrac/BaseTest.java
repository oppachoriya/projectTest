package main.java.uitestsforPrac;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import org.testng.annotations.AfterSuite;
import org.testng.annotations.BeforeSuite;
import org.testng.annotations.Optional;
import org.testng.annotations.Parameters;

/**
 * Created by UdayN on 08-02-2018.
 */
public class BaseTest {
	WebDriver driver;
	boolean isPass = false;
	@Parameters({"os","isPass"})
	@BeforeSuite
	public void initializeDriver(@Optional("windows") String os,@Optional("true") String isPass){
		ChromeOptions options = new ChromeOptions();
		if(os.equals("windows")) {
			System.setProperty("webdriver.chrome.driver",System.getProperty("user.dir")+"\\lib\\chromedriver.exe");
		}
		else {
			System.setProperty("webdriver.chrome.driver",System.getProperty("user.dir")+"/lib/chromedriver");
			options.addArguments("--headless");
		}
		options.addArguments("--start-maximized");
		driver = new ChromeDriver(options);

		if (isPass.equals("true")){
			this.isPass = true;
		}
	}

	@AfterSuite
	public void closeAllBrowser(){
		driver.quit();
	}
}
