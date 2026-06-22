<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\JobListing;
use App\Models\BlogPost;
use App\Models\Statistic;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@falanesolutions.com',
            'password' => Hash::make('password'),
        ]);

        $role = Role::create(['name' => 'super_admin']);
        $admin->assignRole('super_admin');

        $this->call(ServiceSeeder::class);

        Statistic::insert([
            ['label' => 'Clients Served', 'value' => 200, 'prefix' => '200', 'suffix' => '+', 'icon' => 'briefcase', 'sort_order' => 1, 'is_active' => true],
            ['label' => 'Placements Made', 'value' => 500, 'prefix' => '500', 'suffix' => '+', 'icon' => 'users', 'sort_order' => 2, 'is_active' => true],
            ['label' => 'Years Experience', 'value' => 7, 'prefix' => '7', 'suffix' => '+', 'icon' => 'clock', 'sort_order' => 3, 'is_active' => true],
            ['label' => 'Client Satisfaction', 'value' => 98, 'prefix' => '98', 'suffix' => '%', 'icon' => 'star', 'sort_order' => 4, 'is_active' => true],
        ]);

        TeamMember::insert([
            [
                'name' => 'Mwila Banda',
                'position' => 'Managing Director',
                'bio' => 'Mwila brings over 15 years of experience in HR consultancy and labour law. She founded Falane Solutions with a vision to transform workforce management across Africa.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Chilufya Mutale',
                'position' => 'Head of Recruitment',
                'bio' => 'Chilufya leads our recruitment division with expertise in talent acquisition across multiple sectors, including mining, healthcare, and financial services.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Thandiwe Okafor',
                'position' => 'Immigration Lead',
                'bio' => 'Thandiwe specializes in immigration law and cross-border workforce mobility, ensuring compliant and efficient processing for our clients.',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'James Phiri',
                'position' => 'Operations Manager',
                'bio' => 'James oversees our outsourcing and facility management divisions, ensuring seamless service delivery and client satisfaction.',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ]);

        Testimonial::insert([
            [
                'client_name' => 'Patricia Mulenga',
                'client_position' => 'HR Director',
                'client_company' => 'Zambia National Bank',
                'content' => 'Falane Solutions transformed our recruitment process. Their understanding of our industry and ability to source top-tier talent has been exceptional. We have filled 15 critical positions in just 3 months.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'client_name' => 'David Chirwa',
                'client_position' => 'CEO',
                'client_company' => 'AfriTech Solutions',
                'content' => 'The immigration services provided by Falane Solutions were invaluable in helping us relocate our expatriate team. Their expertise in Zambian immigration law saved us months of processing time.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'client_name' => 'Sarah Kapwepwe',
                'client_position' => 'Managing Director',
                'client_company' => 'Greenfield Mining Corp',
                'content' => 'We have been working with Falane Solutions for our outsourcing needs for over 3 years. Their managed workforce program has significantly reduced our operational costs while improving efficiency.',
                'rating' => 5,
                'is_active' => true,
            ],
        ]);

        JobListing::insert([
            [
                'title' => 'Senior Recruitment Consultant',
                'slug' => 'senior-recruitment-consultant',
                'location' => 'Lusaka, Zambia',
                'type' => 'full-time',
                'department' => 'Recruitment',
                'summary' => 'We are looking for an experienced Recruitment Consultant to join our growing team. You will be responsible for managing the full recruitment lifecycle for our corporate clients.',
                'description' => 'As a Senior Recruitment Consultant at Falane Solutions, you will play a pivotal role in expanding our recruitment division. You will manage client relationships, source candidates across multiple sectors, and lead a team of junior recruiters. The ideal candidate has a proven track record in agency recruitment and strong business development skills.',
                'requirements' => json_encode(['5+ years in agency recruitment', 'Proven business development track record', 'Experience in mining, finance, or healthcare sectors', 'Strong communication and negotiation skills', 'Bachelor\'s degree in HR or related field']),
                'responsibilities' => json_encode(['Manage full recruitment lifecycle', 'Develop and maintain client relationships', 'Source and screen candidates', 'Lead and mentor junior team members', 'Meet and exceed placement targets']),
                'salary_range' => 'Competitive + Commission',
                'closing_date' => '2026-08-31',
                'is_active' => true,
            ],
            [
                'title' => 'Immigration Consultant',
                'slug' => 'immigration-consultant',
                'location' => 'Lusaka, Zambia',
                'type' => 'full-time',
                'department' => 'Immigration',
                'summary' => 'Join our immigration team to help clients navigate work permits, visas, and relocation across Africa.',
                'description' => 'We are seeking a knowledgeable Immigration Consultant to join our growing immigration division. You will advise corporate clients on immigration matters, prepare and submit applications, and ensure compliance with Zambian and regional immigration laws.',
                'requirements' => json_encode(['3+ years in immigration consulting', 'Deep knowledge of Zambian immigration law', 'Experience with work permits and business visas', 'Strong attention to detail', 'Bachelor\'s degree in Law or related field']),
                'responsibilities' => json_encode(['Prepare and submit visa applications', 'Advise clients on immigration matters', 'Stay updated on regulatory changes', 'Manage client documentation', 'Coordinate with government agencies']),
                'salary_range' => 'Competitive',
                'closing_date' => '2026-09-15',
                'is_active' => true,
            ],
            [
                'title' => 'Business Development Manager',
                'slug' => 'business-development-manager',
                'location' => 'Lusaka, Zambia',
                'type' => 'full-time',
                'department' => 'Business Development',
                'summary' => 'Drive growth by identifying new business opportunities and building strategic partnerships.',
                'description' => 'We are looking for a dynamic Business Development Manager to drive Falane Solutions\' growth across Zambia and the region. You will identify new business opportunities, build strategic partnerships, and expand our client base across all service lines.',
                'requirements' => json_encode(['5+ years in B2B sales or business development', 'Experience in HR/recruitment industry preferred', 'Strong network in corporate Zambia', 'Excellent presentation and negotiation skills', 'Bachelor\'s degree in Business or Marketing']),
                'responsibilities' => json_encode(['Identify and pursue new business opportunities', 'Build and maintain client relationships', 'Develop strategic partnerships', 'Achieve revenue growth targets', 'Prepare proposals and presentations']),
                'salary_range' => 'Competitive + Commission',
                'closing_date' => '2026-08-31',
                'is_active' => true,
            ],
        ]);

        $posts = [
            [
                'title' => 'The Future of Recruitment in Zambia: Trends to Watch in 2026',
                'slug' => 'future-of-recruitment-zambia-2026',
                'excerpt' => 'Explore the key trends shaping the recruitment landscape in Zambia, from digital transformation to skills-based hiring.',
                'content' => '<h2>The Changing Face of Recruitment in Zambia</h2><p>As we move through 2026, the recruitment landscape in Zambia is undergoing a significant transformation. Organizations are increasingly adopting technology-driven approaches to talent acquisition, and the competition for skilled professionals continues to intensify.</p><h3>Digital Transformation in Hiring</h3><p>The adoption of Applicant Tracking Systems (ATS) and AI-powered screening tools is becoming more prevalent among Zambian employers. These technologies are streamlining the recruitment process, reducing time-to-hire, and improving candidate matching accuracy.</p><h3>The Rise of Remote Work</h3><p>While still emerging in Zambia, remote and hybrid work models are gaining traction, particularly in the technology and financial services sectors. This shift is expanding the talent pool beyond geographical boundaries.</p><h3>Skills-Based Hiring</h3><p>Employers are increasingly focusing on skills and competencies rather than just academic qualifications. This approach is opening up opportunities for a broader range of candidates and helping companies build more diverse, capable teams.</p><p>At Falane Solutions, we are at the forefront of these trends, helping our clients navigate the evolving recruitment landscape with innovative, tailored solutions.</p>',
                'tags' => json_encode(['recruitment', 'Zambia', 'HR trends', 'talent acquisition']),
                'category' => 'Recruitment',
                'is_published' => true,
                'published_at' => '2026-05-15 08:00:00',
            ],
            [
                'title' => 'Navigating Zambian Immigration: A Guide for Employers',
                'slug' => 'navigating-zambian-immigration-guide',
                'excerpt' => 'A comprehensive guide for employers looking to hire foreign talent and navigate Zambia immigration requirements.',
                'content' => '<h2>Understanding Zambia Immigration Framework</h2><p>Zambia offers various immigration pathways for businesses looking to employ foreign talent. Understanding these options is crucial for compliance and smooth operations.</p><h3>Employment Permits</h3><p>The Employment Permit is the primary route for foreign nationals seeking to work in Zambia. The Department of Immigration requires a comprehensive application demonstrating that the position cannot be filled by a local candidate.</p><h3>Investor Permits</h3><p>For foreign investors looking to establish or invest in Zambian businesses, the Investor Permit offers a pathway to residency. This requires proof of investment capital and a viable business plan.</p><h3>Critical Skills Visa</h3><p>The Critical Skills Visa is designed to attract professionals in sectors where Zambia faces skills shortages, including mining, engineering, healthcare, and technology.</p><p>Our immigration team at Falane Solutions provides end-to-end support for all these pathways, ensuring compliant, efficient processing.</p>',
                'tags' => json_encode(['immigration', 'Zambia', 'work permits', 'visas', 'employer guide']),
                'category' => 'Immigration',
                'is_published' => true,
                'published_at' => '2026-04-20 08:00:00',
            ],
            [
                'title' => 'Building a High-Performance Workforce: Strategies for Zambian Companies',
                'slug' => 'building-high-performance-workforce',
                'excerpt' => 'Learn how Zambian companies can build and maintain high-performance teams through strategic HR practices.',
                'content' => '<h2>The Foundation of High Performance</h2><p>A high-performance workforce doesn\'t happen by accident. It requires deliberate strategy, consistent investment, and a culture that fosters excellence.</p><h3>Strategic Talent Acquisition</h3><p>Building a high-performance team starts with hiring the right people. This means going beyond traditional interviews to implement competency-based assessments, cultural fit evaluations, and structured onboarding programs.</p><h3>Continuous Learning and Development</h3><p>Investing in employee development is critical for maintaining high performance. Companies that provide regular training, mentorship programs, and clear career progression paths see higher engagement and retention rates.</p><h3>Performance Management</h3><p>Modern performance management goes beyond annual reviews. Regular feedback cycles, OKRs, and data-driven performance tracking help maintain alignment and drive continuous improvement.</p><p>Falane Solutions partners with organizations across Zambia to design and implement these high-performance workforce strategies.</p>',
                'tags' => json_encode(['workforce', 'HR strategy', 'performance', 'Zambia', 'talent management']),
                'category' => 'HR Strategy',
                'is_published' => true,
                'published_at' => '2026-03-10 08:00:00',
            ],
            [
                'title' => 'Zambia Mining Sector Recruitment: Finding Skilled Workers for 2026',
                'slug' => 'zambia-mining-recruitment-2026',
                'excerpt' => 'Discover effective strategies for recruiting skilled mining professionals in Zambia competitive mining sector.',
                'content' => '<h2>Mining Recruitment in Zambia</h2><p>The mining sector remains a cornerstone of the Zambian economy, and finding skilled workers is more competitive than ever. With new mining projects coming online and existing operations expanding, the demand for qualified mining professionals continues to grow.</p><h3>Key Skills in Demand</h3><p>Mining engineers, geologists, metallurgists, and safety officers are among the most sought-after professionals in the Zambian mining industry. Companies are also increasingly looking for professionals with expertise in sustainable mining practices and environmental compliance.</p><h3>Recruitment Strategies</h3><p>Successful mining recruitment in Zambia requires a multi-channel approach, combining local talent pools with international sourcing for specialized roles. Building relationships with mining training institutions and leveraging industry networks are essential strategies.</p><p>Falane Solutions specializes in mining sector recruitment, helping companies find the technical and operational talent they need to succeed.</p>',
                'tags' => json_encode(['mining', 'Zambia', 'recruitment', 'skilled workers', 'mining jobs']),
                'category' => 'Recruitment',
                'is_published' => true,
                'published_at' => '2026-02-18 08:00:00',
            ],
            [
                'title' => 'Work Permits in Zambia: Complete Guide for Foreign Workers 2026',
                'slug' => 'zambia-work-permits-guide-2026',
                'excerpt' => 'Everything you need to know about obtaining work permits in Zambia for foreign employees in 2026.',
                'content' => '<h2>Zambia Work Permit Guide</h2><p>Obtaining a work permit in Zambia requires careful preparation and understanding of the regulatory framework. This guide walks employers through the process step by step.</p><h3>Types of Work Permits</h3><p>Zambia offers several categories of work permits including the Employment Permit for general workers, the Investor Permit for business owners, and the Critical Skills Permit for specialized professionals in shortage areas.</p><h3>Application Process</h3><p>The application process involves submitting detailed documentation to the Department of Immigration, including the employment contract, company registration documents, and proof that the position cannot be filled locally. Processing times typically range from 4 to 8 weeks.</p><p>Our immigration experts at Falane Solutions handle the entire work permit application process, ensuring compliance and timely approvals.</p>',
                'tags' => json_encode(['work permits', 'Zambia', 'immigration', 'foreign workers', 'employment permits']),
                'category' => 'Immigration',
                'is_published' => true,
                'published_at' => '2026-01-22 08:00:00',
            ],
            [
                'title' => 'HR Outsourcing Benefits for Zambian Small Businesses',
                'slug' => 'hr-outsourcing-benefits-zambia-small-business',
                'excerpt' => 'Learn how HR outsourcing can help Zambian small businesses reduce costs and improve compliance.',
                'content' => '<h2>HR Outsourcing for Small Businesses in Zambia</h2><p>Small and medium enterprises in Zambia face unique HR challenges, from compliance with labor laws to managing employee benefits. HR outsourcing offers a practical solution that allows business owners to focus on growth while experts handle their people management needs.</p><h3>Cost Savings</h3><p>Outsourcing HR functions can reduce overhead costs by eliminating the need for a full-time HR department while still accessing professional expertise. Small businesses typically save 20-30% on HR-related costs through outsourcing.</p><h3>Compliance Assurance</h3><p>Keeping up with Zambia changing labor laws and statutory requirements is challenging. HR outsourcing partners stay current with regulations, ensuring your business remains compliant and avoiding costly penalties.</p><p>Falane Solutions offers tailored HR outsourcing packages designed specifically for Zambian small and medium businesses.</p>',
                'tags' => json_encode(['HR outsourcing', 'small business', 'Zambia', 'cost savings', 'compliance']),
                'category' => 'HR Strategy',
                'is_published' => true,
                'published_at' => '2025-12-05 08:00:00',
            ],
            [
                'title' => 'Employee Training Programs: Investing in Your Zambian Workforce',
                'slug' => 'employee-training-programs-zambia-workforce',
                'excerpt' => 'Discover how employee training programs can boost productivity and retention in Zambian organizations.',
                'content' => '<h2>The Value of Employee Training in Zambia</h2><p>Investing in employee training is one of the most effective strategies for improving organizational performance and employee satisfaction. Zambian companies that prioritize training see measurable improvements in productivity, quality, and staff retention.</p><h3>Key Training Areas</h3><p>Leadership development, technical skills training, customer service excellence, and health and safety compliance are among the most in-demand training areas for Zambian organizations. Customized programs that address specific industry needs deliver the best results.</p><h3>ROI of Training</h3><p>Companies that invest in employee training report 24% higher profit margins and 218% higher income per employee. Training also significantly reduces turnover, saving substantial recruitment and onboarding costs.</p><p>Falane Solutions offers comprehensive management and employee training programs tailored to your organization specific needs.</p>',
                'tags' => json_encode(['employee training', 'Zambia', 'workforce development', 'leadership', 'professional development']),
                'category' => 'HR Strategy',
                'is_published' => true,
                'published_at' => '2025-11-10 08:00:00',
            ],
            [
                'title' => 'Company Registration in Zambia: Step-by-Step Guide 2026',
                'slug' => 'company-registration-zambia-guide-2026',
                'excerpt' => 'A complete step-by-step guide to registering a company in Zambia, including legal requirements and costs.',
                'content' => '<h2>Registering Your Company in Zambia</h2><p>Starting a business in Zambia requires navigating several regulatory steps. This guide provides a clear roadmap for company registration in Zambia, from name reservation to tax registration.</p><h3>Step 1: Name Reservation</h3><p>The first step is reserving your company name with the Patents and Companies Registration Agency (PACRA). You can check name availability and reserve your preferred name online.</p><h3>Step 2: Incorporation</h3><p>Submit your incorporation documents including the memorandum and articles of association, details of directors and shareholders, and registered address. The process typically takes 5-10 working days.</p><h3>Step 3: Tax Registration</h3><p>After incorporation, register with the Zambia Revenue Authority (ZRA) for tax purposes, including income tax, VAT, and PAYE if you will have employees.</p><p>Falane Solutions provides end-to-end company registration services, guiding entrepreneurs through every step of the process.</p>',
                'tags' => json_encode(['company registration', 'Zambia', 'business setup', 'PACRA', 'entrepreneurship']),
                'category' => 'Business',
                'is_published' => true,
                'published_at' => '2025-10-15 08:00:00',
            ],
            [
                'title' => 'Labour Law Compliance in Zambia: What Employers Must Know',
                'slug' => 'labour-law-compliance-zambia-employers',
                'excerpt' => 'Essential guide to labour law compliance for employers operating in Zambia, covering key regulations and obligations.',
                'content' => '<h2>Zambia Labour Law Compliance</h2><p>Understanding and complying with Zambia labour laws is essential for every employer operating in the country. Non-compliance can result in penalties, legal disputes, and reputational damage.</p><h3>Key Legislation</h3><p>The Employment Code Act No. 3 of 2019 is the primary legislation governing employment in Zambia. It covers employment contracts, working hours, leave entitlements, termination procedures, and dispute resolution mechanisms.</p><h3>Employer Obligations</h3><p>Employers must provide written employment contracts, register employees for NAPSA and workers compensation, comply with minimum wage regulations, and maintain proper records. Understanding these obligations is critical for avoiding disputes.</p><p>Falane Solutions labour dispute resolution and compliance services help employers navigate Zambia complex labour law landscape with confidence.</p>',
                'tags' => json_encode(['labour law', 'Zambia', 'compliance', 'employers', 'employment code']),
                'category' => 'HR Strategy',
                'is_published' => true,
                'published_at' => '2025-09-20 08:00:00',
            ],
            [
                'title' => 'Payroll Management Best Practices for Zambian Companies',
                'slug' => 'payroll-management-best-practices-zambia',
                'excerpt' => 'Learn best practices for payroll management in Zambia, including tax compliance and statutory deductions.',
                'content' => '<h2>Payroll Management in Zambia</h2><p>Effective payroll management is critical for employee satisfaction and regulatory compliance. Zambian companies must navigate complex tax requirements, statutory deductions, and reporting obligations.</p><h3>Statutory Deductions</h3><p>Employers in Zambia must deduct PAYE (Pay As You Earn) income tax, NAPSA (National Pension Scheme Authority) contributions, and workers compensation levies from employee salaries. Understanding the correct rates and thresholds is essential.</h3><h3>Payroll Cycle Best Practices</h3><p>Establishing a consistent payroll cycle, maintaining accurate employee records, implementing robust approval processes, and conducting regular audits are key best practices for Zambian companies.</p><p>Falane Solutions payroll and statutory returns service ensures accurate, timely payroll processing and full compliance with Zambian tax and regulatory requirements.</p>',
                'tags' => json_encode(['payroll', 'Zambia', 'tax compliance', 'NAPSA', 'PAYE']),
                'category' => 'Business',
                'is_published' => true,
                'published_at' => '2025-08-25 08:00:00',
            ],
            [
                'title' => 'Accounting Services for Zambian SMEs: Why Professional Support Matters',
                'slug' => 'accounting-services-zambian-smes',
                'excerpt' => 'Discover why professional accounting services are essential for Zambian small and medium enterprises.',
                'content' => '<h2>Professional Accounting for Zambian SMEs</h2><p>Many small and medium enterprises in Zambia underestimate the importance of professional accounting services. Proper financial management is not just about compliance, it is a strategic tool for business growth.</p><h3>Benefits of Professional Accounting</h3><p>Professional accountants provide accurate financial reporting, tax compliance, cash flow management, and strategic financial insights. They help business owners make informed decisions and avoid costly financial mistakes.</p><h3>Key Services</h3><p>Financial statement preparation, tax returns, management accounts, budgeting and forecasting, and audit support are essential accounting services that every growing Zambian business should consider outsourcing.</p><p>Falane Solutions comprehensive accounting and auditing services help Zambian businesses maintain financial health and regulatory compliance.</p>',
                'tags' => json_encode(['accounting', 'Zambia', 'SME', 'financial management', 'auditing']),
                'category' => 'Business',
                'is_published' => true,
                'published_at' => '2025-07-30 08:00:00',
            ],
            [
                'title' => 'Expatriate Relocation to Zambia: Complete Guide for Employers',
                'slug' => 'expatriate-relocation-zambia-employer-guide',
                'excerpt' => 'A comprehensive guide for employers relocating expatriate staff to Zambia, covering visas, housing, and settlement.',
                'content' => '<h2>Relocating Employees to Zambia</h2><p>Successfully relocating expatriate employees to Zambia requires careful planning and coordination across multiple areas, from immigration compliance to cultural integration.</p><h3>Immigration Requirements</h3><p>Expatriates moving to Zambia need appropriate work permits and entry visas. The employment permit application must demonstrate that the position cannot be filled by a Zambian national. Processing typically takes 6-8 weeks.</p><h3>Settlement Support</h3><p>Comprehensive relocation support including housing assistance, school placement for children, spousal support, and cultural orientation significantly improves expatriate retention and productivity. Companies that invest in quality relocation support see better outcomes.</p><p>Falane Solutions immigration and relocation services provide end-to-end support for companies bringing expatriate talent to Zambia.</p>',
                'tags' => json_encode(['expatriate', 'relocation', 'Zambia', 'immigration', 'employer guide']),
                'category' => 'Immigration',
                'is_published' => true,
                'published_at' => '2025-07-01 08:00:00',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }

        Setting::insert([
            ['key' => 'company_name', 'value' => 'Falane Solutions', 'group' => 'general'],
            ['key' => 'company_tagline', 'value' => 'HR & Immigration Consultancy Services', 'group' => 'general'],
            ['key' => 'company_email', 'value' => 'info@falanesolutions.com', 'group' => 'general'],
            ['key' => 'company_phone', 'value' => '+260 764 145 468', 'group' => 'general'],
            ['key' => 'company_address', 'value' => 'Sunningdale Plot No. 12, Mwinilunga Road, Kabulonga, Lusaka, Zambia', 'group' => 'general'],
            ['key' => 'company_description', 'value' => 'Falane Solutions is a Zambian-owned company founded in 2019, specializing in comprehensive HR and Immigration consultancy services.', 'group' => 'general'],
            ['key' => 'office_hours', 'value' => 'Mon - Fri: 08:00 - 17:00', 'group' => 'general'],
            ['key' => 'social_linkedin', 'value' => 'https://linkedin.com/company/falanesolutions', 'group' => 'social'],
            ['key' => 'social_facebook', 'value' => 'https://facebook.com/falanesolutions', 'group' => 'social'],
            ['key' => 'social_twitter', 'value' => 'https://twitter.com/falanesolutions', 'group' => 'social'],
            ['key' => 'social_instagram', 'value' => 'https://instagram.com/falanesolutions', 'group' => 'social'],
            ['key' => 'ga4_measurement_id', 'value' => '', 'group' => 'analytics'],
            ['key' => 'gtm_container_id', 'value' => '', 'group' => 'analytics'],
            ['key' => 'meta_pixel_id', 'value' => '', 'group' => 'analytics'],
        ]);
    }
}
