<?php
$title= "Window Cleaning";
$description = "Starting a window cleaning business is a fantastic entry point into the service industry because it has low overhead, high recurring demand, and requires minimal technical certification.";
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
            <h1>Window Cleaning</h1>
        </header>

        <section>
            <p>Starting a window cleaning business is a fantastic entry point into the service industry because it has low overhead, high recurring demand, and requires minimal technical certification. Given your background with Military Clean, you likely already have a solid foundation in the "maintenance" side of things, but window cleaning specifically offers some unique high-margin opportunities.</p>
        </section>

        <section>
            <h2>1. Steps to Start a Window Cleaning Business</h2>
            
            <p><strong>Market Research &amp; Specialization</strong></p>
            <p>Decide whether you want to focus on residential (homes, usually lower height) or commercial (storefronts and low-rise offices).</p>
            <ul>
                <li><strong>Residential:</strong> Higher profit per hour but requires more frequent customer acquisition.</li>
                <li><strong>Commercial:</strong> Lower profit per window but provides steady, year-round "route" work.</li>
            </ul>

            <p><strong>Legal Setup &amp; Insurance</strong></p>
            <p>Don't skip the "shield." You'll need:</p>
            <ul>
                <li><strong>Business Structure:</strong> Register as an LLC to protect your personal assets.</li>
                <li><strong>General Liability Insurance:</strong> Essential in case a ladder slips or a window breaks. For a solo operator, this is often quite affordable.</li>
                <li><strong>Business License:</strong> Check with your local city or county office.</li>
            </ul>

            <p><strong>Equipment Acquisition</strong></p>
            <p>You can start with a basic "bucket and squeegee" kit or go high-tech:</p>
            <ul>
                <li><strong>The Basics:</strong> Squeegees (various sizes), t-bars/mops, professional-grade glass soap (like Dawn or specialized solutions), scrapers, and microfiber towels.</li>
                <li><strong>Ladders:</strong> A sturdy multi-position ladder is usually sufficient for residential work.</li>
                <li><strong>Water-Fed Pole (WFP) System:</strong> For higher-end or commercial work, these systems deionize water so you can clean from the ground without squeegeeing. These are more expensive but much safer.</li>
            </ul>
        </section>

        <section>
            <h2>2. Estimated Startup Costs</h2>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Budget Option (Manual)</th>
                            <th>Professional Option (WFP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Basic Gear (Squeegees, Mops, Buckets)</td>
                            <td>$150 – $300</td>
                            <td>$150 – $300</td>
                        </tr>
                        <tr>
                            <td>Ladders (Extension or Multi-use)</td>
                            <td>$200 – $500</td>
                            <td>$200 – $500</td>
                        </tr>
                        <tr>
                            <td>Water-Fed Pole System</td>
                            <td>$0</td>
                            <td>$1,500 – $3,500</td>
                        </tr>
                        <tr>
                            <td>Insurance (Annual Premium)</td>
                            <td>$500 – $1,000</td>
                            <td>$500 – $1,000</td>
                        </tr>
                        <tr>
                            <td>Marketing (Cards, Yard Signs, Site)</td>
                            <td>$200 – $500</td>
                            <td>$500 – $1,000</td>
                        </tr>
                        <tr>
                            <td>Total Estimated Startup</td>
                            <td>$1,050 – $2,300</td>
                            <td>$2,850 – $6,300+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </article>
     
    </main>

   

<?php
  require_once __DIR__ . '/../components/footer.php';
?>