<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset margin and padding */


        :root {
            --green: #00E77F;
            --white: #fff;
            --light-white: #aaa;
            --black: #3d3d3d;
            --light-bg: #4b4b4b;
        }

        * {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            transition: .2s linear;
            text-transform: capitalize;
        }

        *::selection {
            background-color: 62.5%;
            color: var(--black);
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 8rem;
        }

        ::-webkit-scrollbar {
            height: 0.5rem;
            width: 1rem;
        }

        ::-webkit-scroller-track {
            background-color: transparent;
        }

        ::-webkit-scroller-thumb {
            background-color: var(--green);
            border-radius: 5rem;
        }

        body {
            background-color: var(--black);
        }

        section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .outer_container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .container {
            max-width: 800px;
            height: 500px;
            margin-top: 50px;
            background-color: var(--black);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        p {
            line-height: 1.6rem;
            margin-bottom: 20px;
            font-size: 1.9rem;
        }

        /* Section styling */
        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            text-align: center;
        }

        /* Links styling */
        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="outer_container">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to our website! We are dedicated to providing the best service and experience for our users. Our team works hard to innovate and deliver quality solutions that meet your needs.</p>

            <div class="section">
                <h2>Our Mission</h2>
                <p>Our mission is to create a positive impact in the lives of our customers by delivering high-quality products and exceptional service. We strive to be leaders in our industry by focusing on sustainability, quality, and customer satisfaction.</p>
            </div>

            <div class="section">
                <h2>Our Values</h2>
                <p>We believe in integrity, respect, and teamwork. Our values guide every decision we make, ensuring that we remain accountable to our customers, employees, and community.</p>
            </div>

            <p>For more information, feel free to <a href="contact.html">contact us</a>.</p>
        </div>
    </div>
</body>

</html>