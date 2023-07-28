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
        z-index: 1; /* Add this line to ensure the overlay is above other elements */
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
            display: none; /* Add this line to initially hide the modals */
        z-index: 2; /* Add this line to ensure the modal content is above the overlay */
    
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
  <!-- ... (previous HTML code) ... -->
<!-- Your modal and JavaScript code -->
<div class="modal-overlay" id="modalOverlay">
    <!-- Modal content for the first card (INQUIRY Modal) -->
    <div class="modal-content" id="modal-0">
        <h2 class="modal-title">INQUIRY Modal</h2>
        <div class="modal-body">
            <p>If you have any inquiries, please feel free to contact us through the following methods:</p>
            <ul>
                <li>Email: inquiry@example.com</li>
                <li>Phone: +1 (123) 456-7890</li>
                <li>Address: 123 Inquiry Street, City, Country</li>
            </ul>
        </div>
        <div class="close-button-container">
            <button class="modal-close-btn closeModalBtn">Close</button>
        </div>
    </div>

    <!-- Modal content for the second card (QUOTATION Modal) -->
    <div class="modal-content" id="modal-1">
        <h2 class="modal-title">QUOTATION Modal</h2>
        <div class="modal-body">
            <p>If you need a quotation, you can request one by providing the following details:</p>
            <ul>
                <li>Product Name/Code</li>
                <li>Quantity</li>
                <li>Delivery Address</li>
                <li>Contact Information</li>
            </ul>
            <p>Our team will respond to your quotation request within 24 hours.</p>
        </div>
        <div class="close-button-container">
            <button class="modal-close-btn closeModalBtn">Close</button>
        </div>
    </div>

    <!-- Modal content for the third card (PRE-ORDER Modal) -->
    <div class="modal-content" id="modal-2">
        <h2 class="modal-title">PRE-ORDER Modal</h2>
        <div class="modal-body">
            <p>Thank you for your interest in our upcoming products.</p>
            <p>To pre-order, please provide the following details:</p>
            <ul>
                <li>Product Name/Code</li>
                <li>Quantity</li>
                <li>Expected Delivery Date</li>
                <li>Contact Information</li>
            </ul>
            <p>Pre-orders are subject to availability and will be fulfilled on a first-come, first-served basis.</p>
        </div>
        <div class="close-button-container">
            <button class="modal-close-btn closeModalBtn">Close</button>
        </div>
    </div>

    <!-- Modal content for the fourth card (PAYMENT Modal) -->
    <div class="modal-content" id="modal-3">
        <h2 class="modal-title">PAYMENT Modal</h2>
        <div class="modal-body">
            <p>We accept the following payment methods:</p>
            <ul>
                <li>Credit Card</li>
                <li>PayPal</li>
                <li>Bank Transfer</li>
            </ul>
            <p>Please contact our support team if you have any payment-related questions.</p>
        </div>
        <div class="close-button-container">
            <button class="modal-close-btn closeModalBtn">Close</button>
        </div>
    </div>

    <!-- Modal content for the fifth card (SHIPMENT Modal) -->
    <div class="modal-content" id="modal-4">
        <h2 class="modal-title">SHIPMENT Modal</h2>
        <div class="modal-body">
            <p>We offer worldwide shipping with various delivery options:</p>
            <ul>
                <li>Standard Shipping (5-10 business days)</li>
                <li>Express Shipping (2-5 business days)</li>
                <li>Free Shipping for orders over $50</li>
            </ul>
            <p>Contact us if you have any questions about the shipment of your order.</p>
        </div>
        <div class="close-button-container">
            <button class="modal-close-btn closeModalBtn">Close</button>
        </div>
    </div>

    <!-- Modal content for the sixth card (AFTER SALES Modal) -->
    <div class="modal-content" id="modal-5">
        <h2 class="modal-title">AFTER SALES Modal</h2>
        <div class="modal-body">
            <p>If you need any assistance after making a purchase, we are here to help.</p>
            <p>Contact our support team with your order details for any after-sales support or issues.</p>
        </div>
        <div class="close-button-container">
            <button class="modal-close-btn closeModalBtn">Close</button>
        </div>
    </div>
</div>

<script>
    // JavaScript to handle the modal functionality
    const openModalBtns = document.querySelectorAll('.openModalBtn');
    const closeModalBtns = document.querySelectorAll('.modal-close-btn');
    const modalOverlay = document.getElementById('modalOverlay');
    const modalContents = modalOverlay.querySelectorAll('.modal-content');

    openModalBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const modalId = btn.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            modalOverlay.style.display = 'block'; // Show the modal overlay
            modal.style.display = 'block'; // Show the clicked modal
        });
    });

    closeModalBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const modal = btn.closest('.modal-content');
            modal.style.display = 'none'; // Hide the clicked modal
            modalOverlay.style.display = 'none'; // Hide the modal overlay
        });
    });
</script>
</body>
</html>





