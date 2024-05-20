<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            background: rgb(255, 218, 234);
            background: radial-gradient(circle, rgba(255, 218, 234, 1) 0%, rgba(203, 227, 255, 1) 77%);
            top: 100px;
            align-items: center;
            width: 800px;
            height: 400px;
            border-collapse: collapse;

        }

        table.h3 {
            color: #3B4856;
        }

        td {
            padding: 5px;
            /* Adjust the padding value to reduce the gap */
        }

        td p {
            color: black;
            /* Set the paragraph color to black */
        }


        @media (max-width: 600px) {
            td {
                display: block;
                width: 100%;
            }

            td[colspan="2"] {
                width: 50%;
                float: left;
            }

            td[colspan="4"] {
                width: 100%;
            }
        }

        table.img {
            width: 100%;
            height: auto;
        }

        table.p {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>


    <center>
        <table>
            <tr>
                <td colspan="2">
                    <h3>Location</h3><br>
                    <p>NO.99/3, Gothami Road </p>
                </td>
                <td colspan="2">
                    <h3>Telephone</h3><br>
                    <p>94-11-2699373 <br> 94-11-2695642 </p>
                </td>
                <td colspan="2">
                    <h3>E-mail</h3><br>
                    <p>exams@bluekite.com </p>
                </td>
            </tr>
            <tr>
                <td colspan="4" rowspan="2"><img src="../Images/contactus.png" alt="Sample Image" style="height: auto; width: 100%;"></td>
                <td colspan="2" rowspan="2"><a href="https://www.google.com/maps/place/Gothami+Rd/@6.9149518,79.887177,17.43z/data=!4m6!3m5!1s0x3ae25990bf598ecb:0xddbd32c6ab395bae!8m2!3d6.9145356!4d79.8873565!16s%2Fg%2F1tmpcc9h?entry=ttu"><img src="../Images/map.png" alt="Map Image" style="height: auto; width: 100%;"></a></td>
            </tr>

        </table>
    </center>
    <br><br><br><br><br><br><br>
    <?php include 'footer.php'; ?>
</body>

</html>