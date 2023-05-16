<?php require_once('consultant_navbar.php'); ?>
<?php
session_start();
$username=$_SESSION['username'];
if($_SESSION['userlevel']=1)
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diseases</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_disease.css?v=2">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>

    <div class="top-nav">
      <div class="head">
          <h1>Dashboard</h1>
      </div>

      <div class="search">
          <div class="search-bar">
            <span class="material-icons">search</span>
            <input type="search" placeholder="search here">
          </div>
        </div>

      <div class="top">
        <span class="material-icons">notifications</span>
        <span class="material-icons">chat_bubble</span>
        <div class="Loggedin"> Welcome! <?php echo $username;?></div>
        <span class="material-icons">account_circle</span>
      </div>
    </div>

    <div class="board">
      <div class="descript">
        <section class="main_dec">
          <h1>Disease-Specific HCT Indications and Outcomes Data</h1>
          New outcomes data and research has defined which patients can benefit from hematopoietic cell transplant (HCT) and when this therapy is best applied.  HCT offers a potential cure for blood cancers, such as leukemia and lymphoma, and other life-threatening diseases.

          <h3>HCT Data Trends</h3>
          Overall volume trends and indications for transplantation are presented in the figures below. The data show autologous and allogeneic HCT volume, age trends and disease indications for transplant.

          Data in this section have been prepared by the CIBMTR® (Center for International Blood and Marrow Transplant Research®). The CIBMTR is a research collaboration between the National Marrow Donor Program® (NMDP)/Be The Match® and the Medical College of Wisconsin.

          <h3>HCT Consultation Timing Guidelines</h3>
          The National Marrow Donor Program® (NMDP)/Be The Match® and the American Society for Transplantation and Cellular Therapy (ASTCT) have jointly developed guidelines for transplant consultation and referral timing based on disease characteristics. [1] The National Comprehensive Cancer Network Clinical Practice Guidelines (NCCN Guidelines®) were consulted when developing these guidelines and are a valuable tool for determining risk stratification. [2]

          Our guidelines highlight disease categories that include patients at risk for disease progression and who should be referred for a consultation for autologous or allogeneic transplantation.

          <h3>Outcomes and Indications by Disease</h3>
          Access current research, outcomes and HCT Consultation Timing Guidelines below to support your clinical decision-making.

          <h4>Leukemia and Myelodysplasia</h4>
          <ul>
            <li>Acute Myeloid Leukemia (AML) - Adult</li>
            <li>Acute Myeloid Leukemia (AML) - Pediatric</li>
            <li>Acute Lymphoblastic Leukemia (ALL) - Adult</li>
            <li>Acute Lymphoblastic Leukemia (ALL) - Pediatric</li>
            <li>Myelodysplastic Syndromes (MDS)</li>
            <li>Chronic Myeloid Leukemia (CML)</li>
            <li>Chronic Lymphocytic Leukemia (CLL)</li>
          </ul>

          <h4>Lymphomas and Multiple Myeloma</h4>
          <ul>
            <li>Non-Hodgkin Lymphoma (NHL)</li>
            <li>Hodgkin Lymphoma (HL)</li>
            <li>Multiple Myeloma (MM) and Other Plasma Cell Disorders</li>
          </ul>

          <h4>Non-Malignant Disorders and Other Diseases</h4>
          <ul>
            <li>Severe Aplastic Anemia (SAA) and Other Marrow Failure Syndromes</li>
            <li>Sickle Cell Disease (SCD)</li>
            <li>Thalassemia</li>
            <li>Immune Deficiency Diseases</li>
            <li>Inherited Metabolic Disorders</li>
            <li>Myeloproliferative Neoplasms (MPN)</li>
            <li>OtherDiseases</li>
          </ul>

          <h3>Clinical Trials Search and Support</h3>
          The NMDP/Be The Match offers the Be The Match® Jason Carter Clinical Trials Search and Support (CTSS) program, which can provide clinical trial navigation to your patients. The CTSS Program was created to help people with blood cancers or blood disorders and their families find and join clinical trials.
        </section>
        <section class="ALMA" value="#ALMA" name="#ALMA">
          <h1>Acute Myeloid Leukemia (AML) - Adult</h1>
          Allogeneic stem cell transplantation is an important treatment option in the management of adult acute myeloid leukemia (AML). [1] Worldwide, physicians perform more than 7,000 allogeneic transplants for AML, making it the most common and fastest growing indication for allogeneic HCT. [2]
          <br><br>
          Recent advances informing clinical decision-making include increasing identification of prognostic genetic markers in AML used to determine the disease risk status and a composite comorbidity/age score for treatment risk stratification. [1-8]
          <br><br>
          Because of these advances, more is known about which patients are eligible for hematopoietic cell transplantation (HCT) and which are not. In addition, large-scale studies have determined the optimal timing for HCT. As shown in Figure 1, patients with AML transplanted while in first or second complete remission have significantly better outcomes than patients transplanted with advanced disease. This is true whether the patient is undergoing matched related or matched unrelated HCT.
          <br><br>
          Recent research shows an upper age limit may not be a barrier to allogeneic HCT for patients with AML. A CIBMTR® study published in Bone Marrow Transplantation showed differences in outcomes among patient groups were better associated with covariates, such as comorbidities and immunosuppression regimen, than age. Research suggests that patient age alone should not be considered exclusion criteria for a transplant consultation. [9]
          <br><br>
          For patients with intermediate- and poor-risk cytogenetics, a meta-analysis demonstrated a survival benefit of allogeneic HCT in first complete remission over chemotherapy. [10] Early referral for HCT evaluation for these at-risk patients at an early disease stage can significantly improve survival. [11,12]

          <h3>Outcomes</h3>
          Data in this section have been prepared by the CIBMTR. The CIBMTR is a research collaboration between the National Marrow Donor Program® (NMDP)/Be The Match® and the Medical College of Wisconsin
          <h3>HCT Consultation Timing Guidelines</h3>
          The National Marrow Donor Program® (NMDP)/Be The Match® and the American Society for Transplantation and Cellular Therapy (ASTCT) have jointly developed guidelines for transplant consultation and referral timing based on disease characteristics. [13] The National Comprehensive Cancer Network Clinical Practice Guidelines (NCCN Guidelines®) were consulted when developing these guidelines and are a valuable tool in determining risk stratification. [14]
          <br><br>
          Our guidelines highlight disease categories that include patients at risk for disease progression and who should be referred for a consultation for autologous or allogeneic transplantation. [13]

          <h4>Transplant Consultation Guidelines: Adult AML</h4>
          High-resolution HLA typing is recommended at diagnosis for all patients
          <br><br>
          HCT consultation should take place early after initial diagnosis for all patients with AML, including:
          <ul>
            <li>Primary induction failure</li>
            <li>Measurable (also known as minimal) residual disease after initial therapy</li>
            <li>CR1 - except favorable risk AML [defined as: t(8;21)(q22;q22.1); RUNX1-RUNX1T1, inv(16)(p13.1q22) or t(16;16)(p13.1;q22); CBFB-MYH11, mutated NPM1 without FLT3-ITD, biallelic mutated</li>
            <li>Early referral for allogeneic HCT should be considered for any patient with AML in CR1 who is 60 years or older, regardless of cytogenetic or genomic information</li>
            <li>Antecedent hematological disease (e.g., myelodysplastic syndrome [MDS])</li>
            <li>Treatment-related leukemia</li>
            <li>First relapse</li>
            <li>CR2 and beyond, if not previously evaluated</li>
          </ul>
        </section>
      </div>
    </div>

  </body>
</html>

<?php
}
?>
