<?php
// Define the data for our Services section
$services = [
    [
        'title' => 'Policy Workshops',
        'image' => 'https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?auto=format&fit=crop&q=80&w=600',
        'description' => 'Immersive, scenario-based training designed to equip leadership with actionable frameworks for modern policy challenges and crisis management.'
    ],
    [
        'title' => 'Strategic Analysis',
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=600',
        'description' => 'Comprehensive data-driven reports on geopolitical shifts, economic policies, and defense strategies to inform high-level decision making.'
    ],
    [
        'title' => 'Direct Advisory',
        'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=600',
        'description' => 'Confidential consulting integrating organizational psychology and strategic doctrine to align large-scale institutions with their operational goals.'
    ]
];

// Define the data for our Sectors section
$sectors = [
    [
        'title' => 'Governments',
        'description' => 'Assisting local and federal bodies in legislative drafting, civic impact analysis, and public administration optimization.'
    ],
    [
        'title' => 'Armed Forces',
        'description' => 'Providing defense policy consulting, civil-military relations workshops, and strategic risk assessments.'
    ],
    [
        'title' => 'NGOs & Organizations',
        'description' => 'Empowering international organizations with policy advocacy tools, compliance frameworks, and socio-economic research.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Policy Institute | Analysis & Workshops</title>
    <style>
        /* Base Styles */
        :root {
            --primary-color: #1a365d;
            --secondary-color: #2b6cb0;
            --accent-color: #e2e8f0;
            --text-dark: #2d3748;
            --text-light: #ffffff;
            --font-main: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-main);
            line-height: 1.6;
            color: var(--text-dark);
            background-color: #f7fafc;
        }

        /* Navigation */
        header {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        nav a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #90cdf4;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.8)), url('https://images.unsplash.com/photo-1541872516-688cae2df403?auto=format&fit=crop&q=80&w=2000') center/cover;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: var(--text-light);
            padding: 0 20px;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            max-width: 800px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: var(--text-light);
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #3182ce;
        }

        /* Section Formatting */
        .section-title {
            text-align: center;
            font-size: 2.2rem;
            color: var(--primary-color);
            margin: 4rem 0 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Services Cards */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        /* Sectors Section */
        .sectors {
            background-color: var(--accent-color);
            padding: 4rem 0;
        }

        .sectors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .sector-item {
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            border-top: 4px solid var(--secondary-color);
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: var(--text-light);
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            .hero h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Apex Policy Institute</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#sectors">Sectors</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="about">
        <h2>Strategic Clarity in a Complex World</h2>
        <p>Providing premier public policy workshops, deep-dive analysis, and strategic advisement for governments, organizations, and armed forces.</p>
        <a href="#contact" class="btn">Request a Consultation</a>
    </section>

    <div class="container" id="services">
        <h2 class="section-title">Our Expertise</h2>
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['title']); ?>">
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                        <p><?php echo htmlspecialchars($service['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <section class="sectors" id="sectors">
        <div class="container">
            <h2 class="section-title" style="margin-top: 0;">Who We Serve</h2>
            <div class="sectors-grid">
                <?php foreach ($sectors as $sector): ?>
                    <div class="sector-item">
                        <h3><?php echo htmlspecialchars($sector['title']); ?></h3>
                        <p><?php echo htmlspecialchars($sector['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <h2>Ready to refine your strategy?</h2>
            <p style="margin: 1rem 0 2rem;">Contact our team to discuss custom workshops and analytical reports.</p>
            <a href="mailto:contact@apexpolicy.example.com" class="btn">contact@apexpolicy.example.com</a>
            <p style="margin-top: 3rem; font-size: 0.9rem; color: #cbd5e0;">&copy; <?php echo date("Y"); ?> Apex Policy Institute. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>