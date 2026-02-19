<?php
$title= "Car Detailing";
$description = "You can start from a scrappy side hustle and as you gain more business expand to a fully outfitted professional rig.";
  require_once __DIR__ . '/../components/header.php';
?>

<style>
 /* Table Styles */
 h1{
    color: #242164;
 }
 h2{
    color: #000 !important;
    font-size: 2.4rem !important;
 }
        .table-container {
            overflow-x: auto;
            margin: 2rem 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            min-width: 600px;
        }

        thead {
            background-color: #242164;
            color: white;
        }

        th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 1rem;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* List Styles */
        ul {
            margin: 1rem 0 1rem 2rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        strong {
            color: #2c3e50;
        }

        ol {
            margin: 1rem 0 1rem 2rem;
        }

        ol li {
            margin-bottom: 1rem;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            body {
                padding: 15px;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.5rem;
            }

                .content h1 {
        font-size: 2.8rem;
    }

            

            /* Mobile-friendly table */
            .table-container {
                border-radius: 0;
                margin-left: -15px;
                margin-right: -15px;
            }

            table {
                min-width: 100%;
                font-size: 0.9rem;
            }

            th, td {
                padding: 0.75rem 0.5rem;
            }

            th:first-child,
            td:first-child {
                position: sticky;
                left: 0;
                
                color: white;
                z-index: 1;
            }

            tbody td:first-child {
                background-color: #f8f9fa;
                color: #333;
                font-weight: 600;
            }
        }

        @media screen and (max-width: 480px) {
            h1 {
                font-size: 1.75rem;
            }

            h2 {
                font-size: 1.3rem;
            }

            

            th, td {
                padding: 0.6rem 0.4rem;
            }
        }
</style>



    <!-- BANNER -->

    <main class="wrapper flex-col content">

    <article>
        <header>
            <h1>Car Detailing</h1>
        </header>

        <section>
            <h2>1. Estimated Startup Costs</h2>
            <p>(We assist US Veterans with paying Startup costs.)</p>
            <p>You can start from a "scrappy" side hustle and as you gain more business expand to a fully outfitted professional rig.</p>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Tier</th>
                            <th>Estimated Cost</th>
                            <th>Setup Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Scrappy</td>
                            <td>$500 – $1,500</td>
                            <td>Basic wet/dry vac, pressure washer, buckets, mid-grade soaps, and DIY marketing (flyers/social media).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h2>2. Steps to Get Started</h2>
            <p><strong>Phase 1: Skills &amp; Legal Foundation</strong></p>
            <ul>
                <li><strong>Refine Your Craft:</strong> Practice paint correction and interior detailing on family vehicles to build a portfolio of before-and-after photos.</li>
                <li><strong>State Registration:</strong> All car washing and polishing businesses must register with the Labor Commissioner's Office. The annual fee is typically $300 per location.</li>
                <li><strong>Local Licensing:</strong> Obtain a business license from where you operate.</li>
                <li><strong>Water Discharge Permits:</strong> Many CA cities require "Mobile Commercial Wash" permits to ensure you aren't letting soapy water run into storm drains. You may need a water reclamation mat or a "wash-and-reclaim" system.</li>
            </ul>

            <p><strong>Phase 2: Operations &amp; Branding</strong></p>
            <ul>
                <li><strong>Structure:</strong> Most small detailers start as a Sole Proprietorship or LLC (which provides better liability protection).</li>
                <li><strong>Insurance:</strong> At a minimum, get General Liability Insurance to cover any accidental damage to a client's vehicle.</li>
                <li><strong>Branding:</strong> Create a simple logo and set up a Google Business Profile. (We will assist you with marketing copy and show you how to develop a major competitive advantage.)</li>
            </ul>
        </section>

        <section>
            
            <ul>
                <li><strong>Environmental Compliance:</strong> Many counties are strict about runoff. If you aren't using a reclamation system, look into waterless detailing products (like Rinseless Wash), which are often exempt from certain runoff permits and are great for drought-prone areas. Rinseless wash solutions are advanced, polymer-based cleaning concentrates mixed with water (typically 256:1 ratio) to encapsulate dirt, allowing for safe, scratch-free vehicle cleaning without a hose. Popular options include Optimum No Rinse (ONR), DIY Detail Rinseless Wash, and Feynlab Pure Rinseless V3. They remove grime, add shine, and require no rinsing, making them ideal for apartment dwellers or water-restricted areas.</li>
                <li><strong>Strategic Pricing:</strong> Research competitors. Basic detailing typically ranges from $100–$250, while full ceramic coatings can fetch $1,000+. (We will teach you how to start and grow your business.)</li>
            </ul>
        </section>
    </article>
      
     
    </main>

   

<?php
  require_once __DIR__ . '/../components/footer.php';
?>