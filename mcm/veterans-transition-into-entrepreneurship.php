<?php
$title= "The charity Patriotic Hearts helps US Veterans transition into entrepreneurship. ";
$description = "Patriotic Hearts will help you get started with incorporation, training, certifications, and equipment. ";
  require_once __DIR__ . '/components/header.php';
?>

<style>
  .table-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto 4rem auto;
            overflow-x: auto;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }
        
        th, td {
            border: 1px solid #333;
            padding: 12px 15px;
            text-align: left;
        }
        
        th {
            background-color: #fff;
            font-weight: bold;
            font-size: 16px;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        thead th {
            background-color: #f0f0f0;
        }
        
        td:first-child {
            font-weight: bold;
            background-color: #f9f9f9;
            position: sticky;
            left: 0;
            z-index: 5;
        }
        
        thead th:first-child {
            z-index: 15;
            left: 0;
            position: sticky;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        /* Mobile-first responsive design */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            h1 {
                margin-bottom: 20px;
            }
            
            table {
                font-size: 14px;
                min-width: 500px;
            }
            
            th, td {
                padding: 10px 8px;
            }
        }
        
        @media (max-width: 480px) {
            table {
                font-size: 12px;
                min-width: 450px;
            }
            
            th, td {
                padding: 8px 6px;
            }
        }
        
        /* Card layout for very small screens */
        @media (max-width: 600px) {
            .table-container {
                box-shadow: none;
                background: transparent;
            }
            
            .card-view {
                display: block;
            }
            
            .card-view table {
                display: none;
            }
            
            .card {
                background: white;
                border-radius: 8px;
                padding: 15px;
                margin-bottom: 15px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            
            .card h2 {
                color: #333;
                margin-bottom: 15px;
                padding-bottom: 10px;
                border-bottom: 2px solid #007bff;
                font-size: 1.2rem;
            }
            
            .card-row {
                display: flex;
                justify-content: space-between;
                padding: 10px 0;
                border-bottom: 1px solid #eee;
            }
            
            .card-row:last-child {
                border-bottom: none;
            }
            
            .card-label {
                font-weight: bold;
                color: #555;
                flex: 0 0 45%;
            }
            
            .card-value {
                flex: 0 0 50%;
                text-align: right;
                color: #333;
            }
        }

        .btn, .btn:hover{
            display: inline-block;
            background-color: #242164;
            color: #fff;
            padding: 6px 12px;
            margin: 20px 0px;
            font-weight: bold;
        }
</style>



    <!-- BANNER -->

    <main class="wrapper flex-col content">
      <h1>The charity Patriotic Hearts helps US Veterans transition into entrepreneurship</h1>

      

      <div class="paragraph-container">
        
        <p>
        <img
        src="/img/USVE-512x512.jpg"
        alt="Vet Military Clean"
        
         class="right-image"
      />  

      


      <p>Patriotic Hearts will help you get started with incorporation, training, certifications, and equipment. </p>

      <p>Here are several service-based businesses that can be launched for under $1,000 that we assist you in getting started and acquiring good accounts.</p>

      <p>
        <ol>
          <li><strong>Pressure Washing (Driveways, Sidewalks, Siding) </strong>
          <p>This is a high-demand service because the results are immediate and highly visible.</p>
          <p>
            <ul>
            <li><b>Startup Gear:</b> A decent residential/semi-pro gas pressure washer ($400–$600), hoses/nozzles ($100), and basic cleaning solutions ($50).</li>
             <li><b>Why it works:</b> Most homeowners don't want to spend their weekend doing it, and the "before and after" photos make for excellent social media marketing.</li>
              <li><b>Expansion:</b> Add gutter cleaning or window washing later.</li>
          </ul>

          <a href="/learn/pressure-washing" class="btn">Learn More</a>
        
        </p>
        
        </li>

        <li>
          <strong>Mobile Car Detailing</strong>
          <p>Veterans often have a keen eye for detail and high standards of cleanliness, making this a natural fit.</p>
          <p><ul>
            <li><b>Startup Gear:</b> Portable shop vac ($80), electric pressure washer or high-quality hose nozzles ($150), professional-grade chemicals, microfiber towels, and buckets ($200).</li>
            <li><b>Why it works:</b> You go to the customer (office or home). Convenience is a major selling point, and repeat customers are common for monthly maintenance.</li>
          </ul>
        <a href="/learn/car-detailing" class="btn">Learn More</a>
        </p>
        </li>



      

        <li>
          <strong>Professional Window Cleaning</strong>
          <p>This requires more skill than muscle, which appeals to many.</p>
          <p><ul>
            <li><b>Startup Gear:</b> Professional squeegees, scrubbers, buckets, and extension poles ($300–$500). A sturdy multi-position ladder is the biggest investment ($200).</li>
            <li><b>Why it works:</b> Storefronts need this monthly; residential customers need it seasonally. It has a high "word-of-mouth" referral rate in neighborhoods.</li>
            
          </ul>
          <a href="/learn/window-cleaning" class="btn">Learn More</a>
        </p>
        </li>

         <li>
        <strong>Office Cleaning Business</strong>
        <p>This opportunity focuses on the consistent, high-demand world of commercial janitorial services. It creates recurring revenue through service contracts with local businesses, medical offices, and corporate hubs. Businesses view cleaning as a non-negotiable utility. Being a Veteran Owned business it creates a level of trustworthiness and security that clients find incredibly valuable.
            <br />
            <a href="/learn/office-cleaning" class="btn">Learn More</a>
        </p>
         
      </li>

       <li>
        <strong>Carpet Cleaning Business</strong>
        <p>This is a specialized, high-impact service that offers immediate visual results and excellent "per-hour" profitability. It provides deep-cleaning solutions for both residential and commercial carpets, upholstery, and rugs. It  offers massive upsell potential. It’s perfect for Veteran business owners who want a mobile, flexible business that can scale by adding more vans/territories.
             <br /> <a href="/learn/carpet-cleaning" class="btn">Learn More</a>   </p>

         
      </li>

      
        </ol>
      </p>

     
    
    
    <hr />
    </p>
    

        
      </div>

      

      <h2 style="">Choosing Your Mission: Veteran Enterprises Track Comparison</h2>
    
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Office Cleaning</th>
                    <th>Window Washing</th>
                    <th>Pressure Washing</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Startup Cost</td>
                    <td>Low ($2k - $5k)</td>
                    <td>Low ($2k - $4k)</td>
                    <td>Medium ($3k - $6k)</td>
                </tr>
                <tr>
                    <td>Primary Skill</td>
                    <td>Detail/Sanitization</td>
                    <td>Finesse/Technique</td>
                    <td>Mechanical/Precision</td>
                </tr>
                <tr>
                    <td>Physical Intensity</td>
                    <td>Low to Medium</td>
                    <td>Medium (Ladders)</td>
                    <td>Medium</td>
                </tr>
                <tr>
                    <td>Income Type</td>
                    <td>Recurring (Monthly)</td>
                    <td>Seasonal/Repeat</td>
                    <td>Seasonal/Project</td>
                </tr>
                <tr>
                    <td>Vehicle Needed</td>
                    <td>Any reliable car/SUV</td>
                    <td>Any reliable vehicle</td>
                    <td>Truck or Trailer</td>
                </tr>
                <tr>
                    <td>Working Hours</td>
                    <td>Mostly After-Hours</td>
                    <td>Daytime</td>
                    <td>Daytime</td>
                </tr>
                <tr>
                    <td>Best Personality</td>
                    <td>The "Silent Pro"</td>
                    <td>The Perfectionist</td>
                    <td>The Tech/Gearhead</td>
                </tr>
                <tr>
                    <td>Growth Potential</td>
                    <td>High (Staffing/Teams)</td>
                    <td>High (Specialization)</td>
                    <td>Medium (Commercial)</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Card view for mobile (optional alternative) -->
    <div class="card-view" style="display: none;">
        <div class="card">
            <h2>Office Cleaning</h2>
            <div class="card-row">
                <span class="card-label">Startup Cost</span>
                <span class="card-value">Low ($2k - $5k)</span>
            </div>
            <div class="card-row">
                <span class="card-label">Primary Skill</span>
                <span class="card-value">Detail/Sanitization</span>
            </div>
            <div class="card-row">
                <span class="card-label">Physical Intensity</span>
                <span class="card-value">Low to Medium</span>
            </div>
            <div class="card-row">
                <span class="card-label">Income Type</span>
                <span class="card-value">Recurring (Monthly)</span>
            </div>
            <div class="card-row">
                <span class="card-label">Vehicle Needed</span>
                <span class="card-value">Any reliable car/SUV</span>
            </div>
            <div class="card-row">
                <span class="card-label">Working Hours</span>
                <span class="card-value">Mostly After-Hours</span>
            </div>
            <div class="card-row">
                <span class="card-label">Best Personality</span>
                <span class="card-value">The "Silent Pro"</span>
            </div>
            <div class="card-row">
                <span class="card-label">Growth Potential</span>
                <span class="card-value">High (Staffing/Teams)</span>
            </div>
        </div>
        
        <div class="card">
            <h2>Window Washing</h2>
            <div class="card-row">
                <span class="card-label">Startup Cost</span>
                <span class="card-value">Low ($2k - $4k)</span>
            </div>
            <div class="card-row">
                <span class="card-label">Primary Skill</span>
                <span class="card-value">Finesse/Technique</span>
            </div>
            <div class="card-row">
                <span class="card-label">Physical Intensity</span>
                <span class="card-value">Medium (Ladders)</span>
            </div>
            <div class="card-row">
                <span class="card-label">Income Type</span>
                <span class="card-value">Seasonal/Repeat</span>
            </div>
            <div class="card-row">
                <span class="card-label">Vehicle Needed</span>
                <span class="card-value">Any reliable vehicle</span>
            </div>
            <div class="card-row">
                <span class="card-label">Working Hours</span>
                <span class="card-value">Daytime</span>
            </div>
            <div class="card-row">
                <span class="card-label">Best Personality</span>
                <span class="card-value">The Perfectionist</span>
            </div>
            <div class="card-row">
                <span class="card-label">Growth Potential</span>
                <span class="card-value">High (Specialization)</span>
            </div>
        </div>
        
        <div class="card">
            <h2>Pressure Washing</h2>
            <div class="card-row">
                <span class="card-label">Startup Cost</span>
                <span class="card-value">Medium ($3k - $6k)</span>
            </div>
            <div class="card-row">
                <span class="card-label">Primary Skill</span>
                <span class="card-value">Mechanical/Precision</span>
            </div>
            <div class="card-row">
                <span class="card-label">Physical Intensity</span>
                <span class="card-value">Medium</span>
            </div>
            <div class="card-row">
                <span class="card-label">Income Type</span>
                <span class="card-value">Seasonal/Project</span>
            </div>
            <div class="card-row">
                <span class="card-label">Vehicle Needed</span>
                <span class="card-value">Truck or Trailer</span>
            </div>
            <div class="card-row">
                <span class="card-label">Working Hours</span>
                <span class="card-value">Daytime</span>
            </div>
            <div class="card-row">
                <span class="card-label">Best Personality</span>
                <span class="card-value">The Tech/Gearhead</span>
            </div>
            <div class="card-row">
                <span class="card-label">Growth Potential</span>
                <span class="card-value">Medium (Commercial)</span>
            </div>
        </div>
    </div>

      <h2>To Get Started</h2>


      <strong class="call-write">Call 760-847-2561 or write to usveteransenterprises@gmail.com</strong>
     
    </main>

   

<?php
  require_once __DIR__ . '/components/footer.php';
?>