# Web Development Laboratory (CS68L)

This repository contains the source code, explanations, and Viva Voce preparation materials for the Web Development Laboratory course. Each folder/file corresponds to a specific weekly experiment outline from the course syllabus.

---

## 📅 Table of Contents

| Week | Experiment Description | Key Technologies | Code Links |
| :--- | :--- | :--- | :--- |
| **01** | Department Timetable Design | HTML5 Tables, Lists, Anchors | [1.tt.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/1.tt.html) |
| **02** | a) Student Feedback Form <br> b) Left-Right Frame Navigation | HTML5 Forms, `<frameset>` | a) [2a.form.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2a.form.html) <br> b) [2b.frame.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2b.frame.html), [2b.link.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2b.link.html), [2b.content.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2b.content.html) |
| **03** | 2x2 Nested Grid Frame Layout | HTML5 nested `<frameset>` | [3.fourframe.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.fourframe.html), [3.topleft.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.topleft.html), [3.topright.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.topright.html), [3.bottomleft.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.bottomleft.html), [3.bottomright.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.bottomright.html) |
| **04** | Professional Resume Design | Semantic HTML5, Text Formatting | [4.resume.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/4.resume.html) |
| **05** | CSS Properties Demonstration | CSS Styles, pseudo-classes, visibility | [5.styling.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/5.styling.html), [5.css](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/5.css) |
| **06** | Institute Landing Page | Inline, Internal, & External CSS | [6.institute.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/6.institute.html), [6.css](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/6.css) |
| **07** | a) Arithmetic JS Calculator <br> b) JS Field Validation Form | JavaScript, DOM API, Events | a) [7a.calc.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/7a.calc.html) <br> b) [7b.fieldvalid.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/7b.fieldvalid.html) |
| **08** | Best of Two Marks Average Evaluator | XHTML, JS Math Engine | [8.marks.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/8.marks.html) |
| **09** | Form Validation via Regular Expressions | XHTML, Regular Expressions (Regex) | [9.xhtmlval.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/9.xhtmlval.html) |
| **10** | a) PHP Date Script <br> b) Client-Server Prime Checker | PHP Scripting, GET/POST | a) [10a.date.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/10a.date.php) <br> b) [10b.prime.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/10b.prime.php) |
| **11** | Text Box Data File Storage & Fetch | PHP I/O Stream, Filesystem | [11.phpform.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/11.phpform.php) |
| **12** | File-Based Authentication System | PHP file parsing, validation | [12.phpauth.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/12.phpauth.php), [login.txt](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/login.txt) |

---

## 📝 Detailed Experiments & Viva Voce Q&As

---

### 🏛️ Week 1: Department Timetable Design
Design a web page for the department timetable containing a suitable header, footer, description of the course codes and titles, faculty name and initials, etc. Use `href`, list tags, and add a University logo as a background. Incorporate the `table` tag with additional features like spanning rows (`rowspan`), columns (`colspan`), and table borders.

*   **Source Code**: [1.tt.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/1.tt.html)

#### 💬 Viva Voce Q&As
*   **Q1: What are the purposes of the `colspan` and `rowspan` attributes in HTML tables?**
    *   **Answer**: `colspan` is used to stretch a single table cell horizontally across multiple columns, while `rowspan` stretches a cell vertically across multiple rows. For example, in a timetable, `rowspan` can consolidate a "BREAK" column across multiple days, and `colspan` can merge hours for lab sessions.
*   **Q2: How do you add a background image in HTML using CSS?**
    *   **Answer**: You target the desired element (like `body` or `table`) and use the CSS property `background-image: url('image_path.jpg');`.
*   **Q3: What is the difference between ordered lists (`<ol>`), unordered lists (`<ul>`), and description lists (`<dl>`)?**
    *   **Answer**: 
        *   `<ul>` displays list items (`<li>`) with bullet points.
        *   `<ol>` displays list items (`<li>`) with sequential numbers or letters.
        *   `<dl>` is a description list comprising a series of terms (`<dt>`) and descriptions (`<dd>`), ideal for structural glossary pairs like course codes and titles.
*   **Q4: What is the advantage of using `border-collapse: collapse;` in table CSS?**
    *   **Answer**: By default, HTML tables render with double borders around cells. Applying `border-collapse: collapse;` collapses these double borders into single, clean lines.

---

### 📝 Week 2: Student Feedback Form & Left-Right Frame Navigation
*   **Part A**: Create a form to collect Student feedback. (Use textbox, text area, checkbox, radio button, select box etc.).
*   **Part B**: Create a web page using frame. Divide the page into two parts with Navigation links on left hand side of page (width=20%) and content page on right hand side of page (width=80%). On clicking the navigation Links corresponding content must be shown on the right-hand side.

*   **Source Code**: 
    *   Feedback Form: [2a.form.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2a.form.html)
    *   Frameset container: [2b.frame.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2b.frame.html)
    *   Sidebar navigation: [2b.link.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2b.link.html)
    *   Content target: [2b.content.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/2b.content.html)

#### 💬 Viva Voce Q&As
*   **Q1: Why are the `<frameset>` and `<frame>` tags deprecated in HTML5?**
    *   **Answer**: They present issues with browser history, bookmarking, search engine crawlability, accessibility, and responsiveness. Instead, HTML5 developers use CSS Grid/Flexbox with semantic elements, or `<iframe>` blocks if external nesting is required.
*   **Q2: How do you target a specific frame when a link is clicked?**
    *   **Answer**: You assign a `name` attribute to the destination `<frame name="content_frame">` and set the `target` attribute of the anchor link to that name: `<a href="page.html" target="content_frame">Link</a>`.
*   **Q3: What is the difference between a checkbox and a radio button?**
    *   **Answer**: Checkboxes permit selection of multiple options within a set, while radio buttons restrict the selection to a single option within a group.
*   **Q4: How do you group radio buttons so only one can be selected?**
    *   **Answer**: Assign the identical `name` attribute to all related radio buttons (e.g., `<input type="radio" name="gender">`).
*   **Q5: What is the difference between `<input type="text">` and `<textarea>`?**
    *   **Answer**: `<input type="text">` creates a single-line textbox, whereas `<textarea>` creates a multi-line input box suitable for paragraphs of feedback or comments.

---

### 🎨 Week 3: Nested Frame Layout (Rows & Columns Grid)
Write HTML code to develop a webpage having two frames that divide the webpage into two equal rows and then divide the row into equal columns, fill each frame with a different background colour.

*   **Source Code**: 
    *   Master Frame: [3.fourframe.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.fourframe.html)
    *   Subframes: [3.topleft.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.topleft.html), [3.topright.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.topright.html), [3.bottomleft.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.bottomleft.html), [3.bottomright.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/3.bottomright.html)

#### 💬 Viva Voce Q&As
*   **Q1: How do you nest framesets to create rows and columns simultaneously?**
    *   **Answer**: You define an outer frameset dividing the page vertically or horizontally (e.g., `rows="50%,50%"`), then replace the child frames with nested `<frameset cols="50%,50%">` declarations inside the rows.
*   **Q2: What is the purpose of the `noresize` attribute?**
    *   **Answer**: It prevents users from dragging the margins to resize frames in the browser window.
*   **Q3: How do you set background colors inside frame documents?**
    *   **Answer**: Since `<frameset>` has no visual background, properties must be styled on the `<body>` element of the individual sub-pages loaded into each frame.

---

### 💼 Week 4: Professional Resume Builder in HTML
Create your resume using HTML tags. Experiment with colors, text formats (bold, italic, and different headings), images, links, sizing, and other related semantic elements.

*   **Source Code**: [4.resume.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/4.resume.html)

#### 💬 Viva Voce Q&As
*   **Q1: What is the difference between `<b>` and `<strong>`, and `<i>` and `<em>`?**
    *   **Answer**: `<b>` (bold) and `<i>` (italic) are presentational styling tags. `<strong>` and `<em>` (emphasized) carry semantic meaning, telling search engines and assistive screen readers that the enclosed text has high importance or stress.
*   **Q2: How do you embed a clickable email link?**
    *   **Answer**: Use the `mailto:` scheme within the `href` attribute: `<a href="mailto:student@email.com">student@email.com</a>`.
*   **Q3: Why is the `alt` attribute mandatory in the `<img>` tag?**
    *   **Answer**: The `alt` (alternative text) attribute describes the image for visually impaired users using screen readers, and is displayed if the image fails to load or download.

---

### ⚙️ Week 5: CSS Properties (Fonts, Repetitions, Link Pseudo-Classes, Visibility)
Design a web page using CSS with suitable design for the following:
1. Demonstrate different font styles.
2. Control the repetition of image with `background-repeat` property.
3. Define style for links as `a:link`, `a:active`, `a:hover`, `a:visited`.
4. Demonstrate Element visibility property.

*   **Source Code**: 
    *   HTML Page: [5.styling.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/5.styling.html)
    *   CSS: [5.css](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/5.css)

#### 💬 Viva Voce Q&As
*   **Q1: What is the difference between `visibility: hidden;` and `display: none;`?**
    *   **Answer**: `visibility: hidden;` hides the element, but the element still occupies its original layout space. `display: none;` removes the element completely from the document flow, making it invisible and collapsing the layout space it would have occupied.
*   **Q2: What is the LVHA rule in link pseudo-classes?**
    *   **Answer**: It dictates the order in which links pseudo-classes must be declared in CSS: `:link`, `:visited`, `:hover`, `:active`. If declared out of order, CSS specificity rules may prevent hover or active states from displaying correctly.
*   **Q3: How do you prevent a background image from repeating?**
    *   **Answer**: Use the CSS declaration `background-repeat: no-repeat;`. Other options include `repeat-x` (horizontal only) and `repeat-y` (vertical only).
*   **Q4: How do the CSS properties `font-weight`, `font-style`, and `font-variant` differ?**
    *   **Answer**:
        *   `font-weight`: Adjusts text thickness (e.g., `bold`, `400`).
        *   `font-style`: Selects italicized or normal styles.
        *   `font-variant`: Renders text in small-caps (`font-variant: small-caps;`).

---

### 🏢 Week 6: Institute Web Page Styling
Design a web page of your institute with an attractive background color, text color, image, and customized fonts. Use External, Internal, and Inline CSS styles to format the page.

*   **Source Code**: 
    *   HTML Page: [6.institute.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/6.institute.html)
    *   External CSS: [6.css](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/6.css)

#### 💬 Viva Voce Q&As
*   **Q1: What is the order of precedence between Inline, Internal, and External CSS?**
    *   **Answer**: Inline CSS has the highest priority. If both Internal and External CSS style the same attribute, the style declared latest (closer to the bottom) in the HTML document wins.
*   **Q2: How do you link an external CSS sheet in HTML?**
    *   **Answer**: Add a `<link>` tag in the `<head>` block: `<link rel="stylesheet" href="filename.css">`.
*   **Q3: What is a CSS Selector? Name the common types.**
    *   **Answer**: CSS Selectors are patterns used to select elements for styling. Common types include:
        *   **Element Selector**: (e.g., `h1 { color: red; }`)
        *   **Class Selector**: (e.g., `.container { margin: 10px; }`)
        *   **ID Selector**: (e.g., `#header { background: blue; }`)
        *   **Universal Selector**: (e.g., `* { box-sizing: border-box; }`)
*   **Q4: What does the `!important` rule do in CSS?**
    *   **Answer**: It overrides all standard cascades and specificities, forcing the browser to apply that specific property definition over inline or ID selectors.

---

### 🧮 Week 7: JS Calculator & Multi-Field Validation
*   **Part A**: Develop a simple calculator for Addition, Subtraction, Multiplication, and Division operations using JavaScript.
*   **Part B**: Create an HTML page containing a form with fields for Name, Email, Mobile No, Gender, Favorite Color, and a button. Write JavaScript code to validate all fields when clicked, then display the aggregated information in a text area.

*   **Source Code**: 
    *   JS Calculator: [7a.calc.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/7a.calc.html)
    *   Validation Page: [7b.fieldvalid.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/7b.fieldvalid.html)

#### 💬 Viva Voce Q&As
*   **Q1: What is JavaScript? Is it compiler-based or interpreter-based?**
    *   **Answer**: JavaScript is a high-level, dynamic, lightweight, and single-threaded scripting language. It is interpreter-based (specifically, modern browsers use Just-In-Time compiling engines to execute JavaScript).
*   **Q2: How do you fetch values from inputs in JavaScript?**
    *   **Answer**: Use the DOM selection API to access the `value` property: `let val = document.getElementById("inputId").value;`.
*   **Q3: What is the difference between `==` and `===` operators?**
    *   **Answer**: `==` is the loose equality operator which compares values after performing type coercion. `===` is the strict equality operator which checks if both the value and the type are identical (no conversion occurs).
*   **Q4: What is the purpose of `isNaN()`?**
    *   **Answer**: It stands for "is Not a Number". It evaluates whether a value is not a legal number, helping to prevent mathematical errors in calculator inputs.

---

### 📊 Week 8: Student Marks Average Evaluator (XHTML & JS)
Write an XHTML document displaying a form with input text elements for Register Number, Subject Code, and marks for three tests. Write a JavaScript script to compute the average of the two best tests upon a button click and display the output via an alert.

*   **Source Code**: [8.marks.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/8.marks.html)

#### 💬 Viva Voce Q&As
*   **Q1: How does XHTML differ syntax-wise from standard HTML?**
    *   **Answer**: XHTML requires stricter syntax:
        *   All tags must be in lowercase.
        *   All tags must be closed (e.g., self-closing tags like `<input />`).
        *   Attributes must be quoted.
        *   Attribute minimization is forbidden (e.g., `disabled="disabled"` instead of `disabled`).
*   **Q2: What is the logic behind calculating the average of the best two out of three tests?**
    *   **Answer**: Let the marks be $M_1, M_2, M_3$. The formula is:
        $$\text{Best Average} = \frac{(M_1 + M_2 + M_3) - \min(M_1, M_2, M_3)}{2}$$
        By subtracting the minimum mark from the sum of all three and dividing by two, we isolate the two highest marks.
*   **Q3: What does the `xmlns` attribute specify?**
    *   **Answer**: It declares the XML Namespace for XHTML: `xmlns="http://www.w3.org/1999/xhtml"`.

---

### 🔍 Week 9: Complex Field Validations (XHTML & Regular Expressions)
Develop an XHTML document and JavaScript program to validate the following registration fields:
1. **User ID**: Length must be between 5 and 12 characters.
2. **Name**: Only alphabetical characters, minimum length of 15.
3. **Password**: Must be at least 8 characters, containing at least one uppercase letter, one special character, and alphanumeric characters.
4. **Email**: Basic email address format validation.

*   **Source Code**: [9.xhtmlval.html](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/9.xhtmlval.html)

#### 💬 Viva Voce Q&As
*   **Q1: What is a Regular Expression (Regex)?**
    *   **Answer**: A Regular Expression is a string sequence defining a search pattern. It is used to perform complex text search and input validations.
*   **Q2: Explain the regex `/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/` used for password validation.**
    *   **Answer**:
        *   `^` and `$` represent the start and end of the string.
        *   `(?=.*[A-Z])`: Positive lookahead checking for at least one uppercase character.
        *   `(?=.*\d)`: Lookahead checking for at least one numeric digit.
        *   `(?=.*[!@#$%^&*])`: Lookahead checking for at least one special character.
        *   `.{8,}`: Enforces that the total length of the password is at least 8 characters.
*   **Q3: Which method is used to match a string against a Regex in JavaScript?**
    *   **Answer**: The `.test()` method of RegExp (e.g., `/pattern/.test(string)` returns `true` or `false`). Alternatively, the String `.match(regex)` method can be used.

---

### 🐘 Week 10: Server-Side scripting with PHP (Date & Prime Checker)
*   **Part A**: Write a PHP script to display today's date in dd-mm-yyyy format.
*   **Part B**: Write a PHP script to check whether the number is prime or not when user input a valid number from client side.

*   **Source Code**: 
    *   PHP Date: [10a.date.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/10a.date.php)
    *   PHP Prime: [10b.prime.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/10b.prime.php)

#### 💬 Viva Voce Q&As
*   **Q1: What is PHP? Where does it execute?**
    *   **Answer**: PHP is a recursive acronym for "Hypertext Preprocessor". It is a server-side scripting language that executes on a web server (like Apache or Nginx). The server processes the code and sends plain HTML/JS results to the client browser.
*   **Q2: How do you format a date in PHP?**
    *   **Answer**: Use the `date(format)` function. For example, `date("d-m-Y")` outputs the day, month, and year separated by hyphens.
*   **Q3: How do you check if a form was submitted via POST in PHP?**
    *   **Answer**: Access the `$_SERVER` superglobal: `if ($_SERVER["REQUEST_METHOD"] == "POST")`.
*   **Q4: Explain the mathematical approach to check if a number is prime.**
    *   **Answer**: A prime number is a natural number greater than 1 that has no positive divisors other than 1 and itself. In code, we check if the number is divisible by any integer from 2 up to the square root of the number. If no divisor is found, the number is prime.

---

### 💾 Week 11: File Storage System in PHP
Create an HTML page containing a textbox, submit, and reset buttons. Write a PHP script to display the entered information and store it into a local text file.

*   **Source Code**: [11.phpform.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/11.phpform.php)

#### 💬 Viva Voce Q&As
*   **Q1: How do `file_put_contents()` and `file_get_contents()` differ?**
    *   **Answer**: `file_put_contents($filename, $data)` opens, writes data into the specified file, and closes it in a single operation. `file_get_contents($filename)` reads the entire contents of a file into a string.
*   **Q2: What is the purpose of the `nl2br()` function in PHP?**
    *   **Answer**: Standard newlines (`\n`) in text files are ignored by browsers when displaying HTML. `nl2br()` automatically inserts `<br />` tags before newlines so that spacing is preserved visually in the browser.
*   **Q3: How do you check if a file exists before trying to read it?**
    *   **Answer**: Use the `file_exists($filename)` function, which returns a boolean value.

---

### 🔑 Week 12: File-Based Authentication System in PHP
Write a PHP script for login authentication. Design an HTML form which takes Username and Password from user and validate against stored Username and Password in a file.

*   **Source Code**: 
    *   PHP Authenticator: [12.phpauth.php](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/12.phpauth.php)
    *   Stored Credentials file: [login.txt](file:///c:/Users/Sujan%20MD/Documents/dsa/web%20lab/login.txt)

#### 💬 Viva Voce Q&As
*   **Q1: How does the `file()` function differ from `file_get_contents()` in PHP?**
    *   **Answer**: `file_get_contents()` reads the entire file into a single, continuous string. `file()` reads the file and parses each line into a separate index in an array, making it ideal for checking row-based entries like credentials.
*   **Q2: Why is the `FILE_IGNORE_NEW_LINES` flag critical in this application?**
    *   **Answer**: By default, each element in the array returned by `file()` includes the trailing newline characters (`\n` or `\r\n`). Setting the `FILE_IGNORE_NEW_LINES` flag strips these characters, ensuring that string matching with the input works correctly.
*   **Q3: How does the `in_array()` function work in PHP?**
    *   **Answer**: It checks if a specific value exists within a target array (e.g., `in_array("username:password", $data)`). It returns `true` if found, and `false` otherwise.
*   **Q4: How do you verify password security in production web systems?**
    *   **Answer**: You should never store passwords as plain text in files or databases. Instead, secure algorithms like `bcrypt` or `Argon2id` (using PHP's `password_hash()` and `password_verify()` API) are used to hash and authenticate credentials safely.
