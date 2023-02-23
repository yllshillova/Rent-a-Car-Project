<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
if (isset($_SESSION['message'])) {
    ?>
    <!-- html part -->
    <div class="alert-message">
        <?= $_SESSION['message']; ?>
        <button type="button" class="messageBtn" aria-label="Close"></button>
    </div>

    <!-- css part -->
    <style>
        .alert-message {
            display: flex;
            margin-bottom: 20px;
            align-items: center;
            padding: 14px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            position: relative;
        }

        .alert-message strong {
            font-weight: 700;
            margin-right: 5px;
            margin-left: 5px;
        }

        .messageBtn {
            background: none;
            border: none;
            color: #721c24;
            cursor: pointer;
            font-size: 24px;
            position: absolute;
            top: 0;
            right: 0;
            padding: 0;
            margin: 0;
        }

        .messageBtn:focus {
            outline: none;
        }

        .messageBtn:before {
            content: '×';
        }

        /* Animate the alert message */
        .alert-message.slideIn {
            animation: slideIn 0.5s forwards;
        }

        .alert-message.slideOut {
            animation: slideOut 0.5s forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes slideOut {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-5%);
            }
        }
    </style>



    <!-- js part -->
    <script>
        const alertMessage = document.querySelector('.alert-message');
        const messageBtn = document.querySelector('.messageBtn');

        // Add event listener to the close button
        messageBtn.addEventListener('click', () => {
            alertMessage.classList.add('slideOut');

            // Remove the alert message from the DOM after the animation has finished
            setTimeout(() => {
                alertMessage.remove();
            }, 500);
        });

    </script>




    <?php
    unset($_SESSION['message']);
}
?>