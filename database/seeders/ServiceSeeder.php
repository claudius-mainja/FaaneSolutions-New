<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::truncate();

        Service::insert([
            [
                'title' => 'Immigration Services',
                'slug' => 'immigration-services',
                'excerpt' => 'Expert immigration consultancy for work permits, business visas, permanent residence, and expatriate relocation across Zambia and Africa.',
                'description' => "At Falane Solutions, we provide comprehensive immigration services to individuals and businesses navigating Zambia's immigration landscape. Our team of experienced consultants offers end-to-end support for all immigration matters, ensuring compliance with the Zambia Department of Immigration regulations and the Immigration and Deportation Act.\n\nOur services cover the full spectrum of immigration needs: employment permits for foreign professionals, business investor permits, visitor visas, permanent residence applications, and dependent passes. We handle the entire application process from document preparation to submission and follow-up, significantly reducing processing times and maximizing approval rates.\n\nFor corporate clients, we offer specialized expatriate management services including immigration compliance audits, work permit renewals, and relocation support. We stay current with changing immigration laws and policies, ensuring your organisation remains compliant while accessing global talent.\n\nOur deep understanding of Zambian immigration procedures, coupled with strong relationships with regulatory authorities, enables us to navigate complex cases efficiently. Whether you are an individual seeking to relocate to Zambia or a corporation managing an international workforce, Falane Solutions delivers reliable, professional immigration services tailored to your needs.",
                'highlights' => json_encode([
                    'Employment permit applications and renewals',
                    'Business and investor permits',
                    'Permanent residence applications',
                    'Dependent and visitor passes',
                    'Immigration compliance audits',
                    'Expatriate relocation support'
                ]),
                'icon' => 'globe-africa',
                'image' => 'images/services/immigration services.png',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'HR Outsourcing',
                'slug' => 'hr-outsourcing',
                'excerpt' => 'Strategic HR outsourcing solutions that reduce operational costs, ensure compliance, and free your team to focus on core business growth.',
                'description' => "Falane Solutions offers comprehensive HR outsourcing services designed to streamline your human resources operations while ensuring full compliance with Zambian labour laws. Our managed HR solutions allow businesses to focus on their core activities while we handle the complexities of people management.\n\nOur HR outsourcing covers the full employee lifecycle: recruitment and onboarding, payroll processing, employee benefits administration, performance management, and compliance with the Employment Code Act No. 3 of 2019. We manage statutory registrations with NAPSA, NHIMA, and workers' compensation, ensuring your business meets all regulatory obligations.\n\nFor small and medium enterprises, our outsourcing solutions are particularly valuable, providing access to professional HR expertise without the cost of a full in-house department. We help businesses implement sound HR policies, employee handbooks, and best practices that reduce risk and improve employee satisfaction.\n\nScalable and flexible, our HR outsourcing adapts to your business size and needs, whether you require full HR department management or specific functions such as payroll administration, recruitment processing, or compliance management.",
                'highlights' => json_encode([
                    'Full employee lifecycle management',
                    'Payroll and benefits administration',
                    'Labour law compliance (Employment Code Act)',
                    'NAPSA, NHIMA, and workers compensation registration',
                    'HR policy development and implementation',
                    'Employee onboarding and offboarding'
                ]),
                'icon' => 'briefcase',
                'image' => 'images/services/HR Outsourcing.png',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Recruitment Services',
                'slug' => 'recruitment-services',
                'excerpt' => 'End-to-end recruitment solutions that connect your organisation with top-tier talent across all industries in Zambia.',
                'description' => "Falane Solutions delivers professional recruitment services that help organisations build high-performing teams. Our comprehensive approach covers the entire recruitment lifecycle, from job profiling and advertising through candidate screening, interviewing, selection, and onboarding.\n\nWe recruit across multiple sectors including mining, banking and finance, healthcare, hospitality, manufacturing, telecommunications, and technology. Our extensive candidate database and industry networks enable us to quickly identify and engage qualified professionals at every level, from entry-level positions to senior management.\n\nOur recruitment process includes rigorous candidate assessment, competency-based interviewing, background verification, reference checking, and cultural fit evaluation. We take time to understand each client's unique requirements, organisational culture, and strategic objectives to ensure successful placements that deliver long-term value.\n\nIn addition to permanent recruitment, we offer temporary and contract staffing solutions that provide flexibility for project-based work, seasonal demands, or maternity cover. Our contingency and retained search models give clients options that align with their hiring needs and budget.",
                'highlights' => json_encode([
                    'End-to-end recruitment lifecycle',
                    'Multi-sector expertise (mining, finance, healthcare, etc.)',
                    'Competency-based candidate assessment',
                    'Background verification and reference checks',
                    'Temporary and contract staffing',
                    'Executive and senior management search'
                ]),
                'icon' => 'users',
                'image' => 'images/services/recruitment services.png',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Management & Employee Training',
                'slug' => 'management-training',
                'excerpt' => 'Tailored training programs that develop leadership skills, enhance productivity, and foster a culture of continuous learning.',
                'description' => "Falane Solutions provides comprehensive management and employee training programs designed to upskill workforces and drive organisational performance. Our training solutions are developed and delivered by experienced facilitators who understand the unique challenges facing Zambian businesses.\n\nOur training portfolio includes leadership development for managers and supervisors, team building and collaboration workshops, customer service excellence programs, communication and interpersonal skills training, and technical skills development. We also offer specialised training in labour law compliance, HR management, and workplace health and safety.\n\nWe pride ourselves on delivering customised training programs tailored to each client's specific needs, industry context, and organisational goals. Our needs analysis process ensures that every training intervention addresses real skill gaps and delivers measurable outcomes.\n\nTraining delivery methods include in-person workshops, on-site sessions at client premises, virtual training platforms, and blended learning approaches. We provide post-training evaluation and follow-up support to reinforce learning and measure impact on job performance.",
                'highlights' => json_encode([
                    'Leadership and management development',
                    'Customer service excellence training',
                    'Team building and collaboration workshops',
                    'Labour law compliance training',
                    'Customised in-house programs',
                    'Post-training evaluation and support'
                ]),
                'icon' => 'star',
                'image' => 'images/services/training services.png',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Payroll & Statutory Returns',
                'slug' => 'payroll',
                'excerpt' => 'Accurate, timely payroll processing and statutory compliance services that keep your business compliant with ZRA, NAPSA, and NHIMA.',
                'description' => "Falane Solutions offers professional payroll management and statutory returns services that ensure your employees are paid accurately and on time while maintaining full compliance with Zambian tax and social security regulations. Our payroll team combines technical expertise with robust systems to deliver error-free processing.\n\nOur payroll services include salary and wage computation, PAYE (Pay As You Earn) tax calculations and deductions, NAPSA contributions management, NHIMA deductions, workers' compensation levies, and third-party deductions such as loan repayments and garnishee orders. We generate detailed payslips, payroll reports, and annual tax certificates.\n\nWe manage all statutory returns and submissions to the Zambia Revenue Authority (ZRA), NAPSA, and NHIMA, ensuring deadlines are met and filings are accurate. Our team stays current with changes in tax rates, contribution thresholds, and regulatory requirements, protecting your business from penalties and compliance risks.\n\nFor businesses with complex payroll needs, we offer custom reporting, integration with HR systems, and dedicated account management. Our payroll services are scalable from small teams to large workforces, and we maintain strict confidentiality and data security standards.",
                'highlights' => json_encode([
                    'Salary and wage computation',
                    'PAYE tax calculations and deductions',
                    'NAPSA and NHIMA contributions management',
                    'ZRA, NAPSA, and NHIMA submissions',
                    'Detailed payroll reporting and payslips',
                    'Annual tax certificate preparation'
                ]),
                'icon' => 'calculator',
                'image' => 'images/services/payroll and statutory.png',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Accounting & Auditing',
                'slug' => 'accounting-auditing',
                'excerpt' => 'Comprehensive accounting and auditing services that ensure accurate financial reporting, regulatory compliance, and strategic insights.',
                'description' => "Falane Solutions provides professional accounting and auditing services that help businesses maintain financial health, ensure regulatory compliance, and make informed strategic decisions. Our team of experienced accountants and auditors delivers meticulous financial management tailored to the Zambian business environment.\n\nOur accounting services include financial statement preparation, bookkeeping, management accounts, cash flow analysis, budgeting and forecasting, and tax compliance. We work with businesses across all sectors, helping them maintain accurate financial records that support decision-making and growth.\n\nOur auditing services cover internal audits, external audit support, compliance audits, and risk assessment. We provide objective, independent evaluations of financial processes and controls, identifying areas for improvement and ensuring adherence to accounting standards and regulatory requirements.\n\nWe assist clients with Zambia Revenue Authority (ZRA) tax compliance including income tax returns, VAT returns, tax planning, and representation during tax audits. Our proactive approach to tax management helps clients minimise liabilities while maintaining full compliance with Zambian tax laws.",
                'highlights' => json_encode([
                    'Financial statement preparation',
                    'Bookkeeping and management accounts',
                    'Internal and external audit support',
                    'ZRA tax compliance and returns',
                    'Budgeting, forecasting, and cash flow analysis',
                    'Risk assessment and financial controls'
                ]),
                'icon' => 'clipboard-list',
                'image' => 'images/services/Accounting and auditing.png',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Labour Dispute Resolution',
                'slug' => 'labour-dispute',
                'excerpt' => 'Expert labour dispute resolution services that protect your business interests while maintaining positive employee relations.',
                'description' => "Falane Solutions offers specialised labour dispute resolution services designed to help employers navigate workplace conflicts efficiently and effectively. Our team has deep knowledge of the Employment Code Act No. 3 of 2019 and extensive experience representing clients before the Labour Office, the Industrial Relations Court, and other tribunals.\n\nOur services cover the full spectrum of workplace disputes including unfair dismissal claims, disciplinary hearings, redundancy and retrenchment processes, wage and benefit disputes, discrimination complaints, and breach of employment contract matters. We provide strategic advice and representation at every stage of the dispute resolution process.\n\nWe place strong emphasis on preventive dispute management, helping clients implement sound disciplinary and grievance procedures, proper termination processes, and compliant employment contracts that reduce the risk of disputes arising. Our proactive approach includes HR policy reviews and management training on labour law compliance.\n\nWhen disputes do arise, our team acts decisively to achieve favourable outcomes through negotiation, mediation, conciliation, or litigation as appropriate. We provide expert representation, prepare all necessary documentation, and guide clients through the entire process with minimal disruption to business operations.",
                'highlights' => json_encode([
                    'Unfair dismissal and disciplinary matters',
                    'Redundancy and retrenchment processes',
                    'Industrial Relations Court representation',
                    'Labour Office mediation and conciliation',
                    'Disciplinary hearing management',
                    'Employment contract and policy reviews'
                ]),
                'icon' => 'shield-check',
                'image' => 'images/services/Labour Dispute Resolution.png',
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Company Registration',
                'slug' => 'company-registration',
                'excerpt' => 'End-to-end company registration services that get your business legally established in Zambia quickly and compliantly.',
                'description' => "Falane Solutions provides comprehensive company registration services that guide entrepreneurs and businesses through every step of establishing a legal entity in Zambia. Our expert team handles all aspects of registration with the Patents and Companies Registration Agency (PACRA) and subsequent regulatory compliance requirements.\n\nOur services include company name reservation and search, preparation and filing of incorporation documents (memorandum and articles of association), registration of directors and shareholders, registered address setup, and issuance of share certificates. We handle both private limited companies and public companies limited by shares.\n\nBeyond initial registration, we provide post-incorporation services including tax registration with the Zambia Revenue Authority (ZRA), VAT registration, NAPSA employer registration, NHIMA registration, and business licensing. We also offer company secretarial services, annual returns filing, and statutory record maintenance.\n\nOur streamlined processes and established relationships with regulatory bodies enable faster processing times and reduced administrative burden. We keep clients informed throughout the process and ensure all documentation is properly prepared and filed, eliminating common delays and rejections.",
                'highlights' => json_encode([
                    'PACRA name reservation and search',
                    'Incorporation document preparation',
                    'Director and shareholder registration',
                    'ZRA tax and VAT registration',
                    'NAPSA and NHIMA employer registration',
                    'Annual returns and company secretarial services'
                ]),
                'icon' => 'building',
                'image' => 'images/services/Company Registration.png',
                'sort_order' => 8,
                'is_active' => true,
            ],
        ]);
    }
}
