<!DOCTYPE html>
<html>
<head>
    <title>Six Cards with Modals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            position: relative;
        }

        .card {
            margin: 10px;
            border: none;
            padding: 10px;
            width: 220px;
            height: 320px; /* Set a fixed height for the card */
            text-align: center;
            position: relative;
            cursor: pointer;
            transition: transform 0.3s;
            overflow: hidden;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 15px;
        }

        .card img {
            width: 100%;
            height: 150px; /* Adjust the image height */
            border-radius: 15px 15px 0 0;
            object-fit: cover;
        }

        /* Styles for the modal overlay */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.3s;
        }

        /* Styles for the modal content */
        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        /* Styles for the modal button */
        .modal-btn {
            padding: 10px 20px;
            width: 120px; /* Set a fixed width for the button */
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Styles for card rows */
        .top-cards {
            display: flex;
            justify-content: center;
        }

        .bottom-cards {
            display: flex;
            justify-content: center;
        }

        /* Style for separating rows */
        .row-separator {
            width: 100%;
            height: 20px;
        }

        /* Hover effect */
        .card:hover {
            transform: translateY(-5px);
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Adjust font size for the title */
        .card h2 {
            font-size: 20px;
            margin-top: 10px;
            font-family: "Outfit";
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="cards-container">
        <div class="top-cards">
            <?php
            // Sample data for top three cards (you can replace these with your own data)
            $topCards = array(
                array('image' => 'application\modules\faq\inquiry.png', 'title' => 'INQUIRY'),
                array('image' => 'application\modules\faq\quotation.png', 'title' => 'QUOTATION'),
                array('image' => 'application\modules\faq\preorder.png', 'title' => 'PRE-ORDER')
            );

            // Loop through the top cards and generate them dynamically
            foreach ($topCards as $index => $card) {
                $modalId = 'modal-' . $index; // Unique ID for each modal
                echo '<div class="card">';
                echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '">';
                echo '<h2>' . $card['title'] . '</h2>';
                echo '<button class="modal-btn openModalBtn" data-modal="' . $modalId . '">Click Here!</button>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="row-separator"></div>

        <div class="bottom-cards">
            <?php
            // Sample data for bottom three cards (you can replace these with your own data)
            $bottomCards = array(
                array('image' => 'application\modules\faq\payment.png', 'title' => 'PAYMENT'),
                array('image' => 'application\modules\faq\shipment.png', 'title' => 'SHIPMENT'),
                array('image' => 'application\modules\faq\after sales.png', 'title' => 'AFTER SALES')
            );

            // Loop through the bottom cards and generate them dynamically
            foreach ($bottomCards as $index => $card) {
                $modalId = 'modal-' . ($index + 3); // Unique ID for each modal
                echo '<div class="card">';
                echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '">';
                echo '<h2>' . $card['title'] . '</h2>';
                echo '<button class="modal-btn openModalBtn" data-modal="' . $modalId . '">Click Here!</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Your modal and JavaScript code -->
    <div class="modal-overlay" id="modalOverlay">
        <!-- Add your modal content here -->
        <!-- Add modals for each card with unique IDs -->
    </div>

    <script>
        // JavaScript to handle the modal functionality
        const openModalBtns = document.querySelectorAll('.openModalBtn');
        const modalOverlay = document.getElementById('modalOverlay');

        openModalBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const modalId = btn.getAttribute('data-modal');
                const modal = document.getElementById(modalId);
                modalOverlay.style.display = 'block';
                modal.style.display = 'block';
            });
        });
    </script>
</body>
</html>
