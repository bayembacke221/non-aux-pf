
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non aux paris sportifs</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-red-500 to-yellow-500 flex items-center justify-center p-4">
<div class="max-w-4xl w-full bg-white rounded-xl shadow-2xl overflow-hidden">
    <div class="p-8">
        <h1 class="text-3xl font-bold text-center mb-8 text-red-600">
            Non aux paris sportifs !
        </h1>
        <div id="slogan" class="text-xl text-center mb-8 transition-opacity duration-500"></div>
        <div class="flex justify-center">
            <button id="engagementButton" class="bg-red-600 text-white px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-red-700 transition duration-300">
                Je m'engage contre les paris sportifs
            </button>
        </div>
    </div>
    <div id="progressBar" class="h-4 bg-red-600 transition-all duration-100 ease-linear" style="width: 0%"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slogans = [
            "Je suis contre la destruction de ma jeunesse donc je dis Non Aux Paris Sportifs",
            "Beugou ma dara lou yakk sama ndawi reew, motakh lepp lou dieum ci carte khaliss damakoy khekh"
        ];
        let currentSlogan = 0;
        const sloganElement = document.getElementById('slogan');
        const progressBar = document.getElementById('progressBar');
        const engagementButton = document.getElementById('engagementButton');

        function updateSlogan() {
            sloganElement.style.opacity = '0';
            setTimeout(() => {
                sloganElement.textContent = slogans[currentSlogan];
                sloganElement.style.opacity = '1';
                currentSlogan = (currentSlogan + 1) % slogans.length;
            }, 500);
        }

        function updateProgressBar() {
            let width = 0;
            const interval = setInterval(() => {
                width += 0.1;
                progressBar.style.width = `${width}%`;
                if (width >= 100) {
                    clearInterval(interval);
                    updateSlogan();
                    updateProgressBar();
                }
            }, 50);
        }

        updateSlogan();
        updateProgressBar();

        engagementButton.addEventListener('mouseenter', () => {
            engagementButton.style.transform = 'scale(1.05)';
        });

        engagementButton.addEventListener('mouseleave', () => {
            engagementButton.style.transform = 'scale(1)';
        });

        engagementButton.addEventListener('click', () => {
            engagementButton.style.transform = 'scale(0.95)';
            setTimeout(() => {
                engagementButton.style.transform = 'scale(1)';
            }, 100);
            alert("Merci pour votre engagement contre les paris sportifs !");
        });
    });
</script>
</body>
</html>
