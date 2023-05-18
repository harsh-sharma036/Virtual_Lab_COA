# Virtual Lab - COA Project

This is a virtual lab project created for the course of Computer Organization and Architecture during the 4th semester of my B.Tech. The project aims is to use the concepts of Web development to design the following convertors on a web enviornment having uniform design with no extra software requirement to run.

## Features

- Virtual & Interactive convertors
- User-friendly interface for easy navigation and control
- Detailed documentation (Help-Book) on usage instructions
- Step-by-step guidance for performing experiments

## Convertors

- **Coordinate Convertor:** The coordinate converter is a tool that allows the user to convert coordinates between three different systems: Cartesian, spherical, and cylindrical. With this converter, users can easily convert coordinates from one system to another, and vice versa. The tool provides a user-friendly interface and makes it easy for users to input the coordinates they want to convert. This tool is particularly useful for individuals working in fields such as astronomy, physics, and engineering where different coordinate systems are commonly used.

- **Number system convertor:** This is a simple number system converter that allows users to convert numbers between different number systems such as binary, decimal, octal, and hexadecimal. It provides an easy-to-use interface for users to enter a number in one system and get its equivalent value in another system. The tool can be useful for computer science students, programmers, and anyone who needs to work with different number systems in their daily tasks.

- **AC Mate:** An air conditioning mate that is controlled by three variables: *temperature (T), humidity (H), and the time of the day (D)*. The AC unit turns on under any of the following circumstances:

  (a) The temperature exceeds 80<sup>o</sup>F, and the time of the day is between 9AM to 6PM.
  
  (b) The humidity exceeds 70%, the temperature exceeds 80<sup>o</sup>F, and the time of the day is between 9AM to 6PM.
  
  (c) The humidity exceeds 70%, the temperature exceeds 80<sup>o</sup>F, and it is a weekend.
  
- **Gray Modulo-10 Convertor:** This is a tool that helps to convert 4-bit binary numbers to their corresponding Gray code representation, and vice versa. The conversion is done modulo-10, meaning that the result is the decimal equivalent of the binary or Gray code number, with the exception that only the last digit (0-9) is kept. This tool is useful for students or professionals working in fields such as digital electronics or computer science, who need to perform conversions between binary and Gray code representations.

## Technologies Used

- HTML
- CSS
- JavaScript
- Bootstrap
- JQuery
- PHP

## Usage

To use the virtual lab, simply navigate to the *Getting Started* and follow the instructions provided. No additional software is required, as the lab runs entirely in the browser.

## Getting Started

To run the virtual labs, you need to follow these steps:
1. Clone the repository `git clone`
2. Run `PHP Server: Serve Project` on your local host.

    [***Note***: For PHP installation navigate to the *PHP Installation Process*]

2. Open the `index.html` file in your browser to access the virtual lab.
3. Follow the instructions provided to perform experiments.

## Installation Process of PHP

### Step 1: Installing PHP
1. To install PHP on your system, follow the instructions given on the official PHP website based on your operating system. You can download PHP from the following link: `https://www.php.net/downloads`
2. Choose the appropriate version according to your system architecture (*x64 or x86*).
3. Extract the downloaded ZIP file to a directory, for example, `C:\php`.
4. Add the `C:\php directory` to the system environment variable Path.
5. To add the directory to the Path variable:
    - Press Windows key + R to open the Run dialog box.
    - Type `sysdm.cpl` and click OK.
    - In the System Properties dialog box, click on the **Advanced tab** and then click **Environment Variables**.
    - In the System Variables section, find **Path** and click **Edit**.
    - Click **New** and add `C:\php` to the Path variable. Click **OK** to save the changes.
6. Open the command prompt and type `php -v` to verify that PHP is installed correctly.

### Step 2: Installing PHP Server Extension in VSCode
To run PHP code in VSCode, you need to install the PHP Server extension. To do so, follow the below steps:
1. Open VSCode and navigate to the Extensions tab on the left sidebar.
2. Search for `PHP Server` in the search bar and select the extension with the author *"brapifra"*.
3. Click on the *"Install"* button to install the extension.
4. Once installed, click on the "Reload" button to activate the extension or restart VSCode..

### Step 3: Installing PHP Intelephense Extension in VSCode
Intelephense is a high performance PHP language server packed full of essential features for productive PHP development. To install PHP IntelliSense in VSCode, follow the below steps:
1. Open the extensions panel in VSCode by pressing `Ctrl+Shift+X`
2. Search for `PHP Intelephense` and select the extension with the author *"Ben Mewburn"*
3. Click on the *"Install"* button to install the extension.
4. Once the installation is complete, restart VSCode.

After completing these steps, you can start running PHP file in VSCode.

## Credits

This project was created by Gunal Gupta and his team as a part of their coursework.

## Team

- Gunal Gupta
- Ginige Manikanta 
- Govind Garg
- Harsh Sharma
- Arpan Gevariya Bhaveshbhai

## License

This project is licensed under the <ins>**MIT License**</ins>.

## Screenshot

<img width="960" alt="HomePage" src="https://user-images.githubusercontent.com/97979413/235374531-081e1c18-7a39-4a17-9b87-01c7bb84bfd8.png">
