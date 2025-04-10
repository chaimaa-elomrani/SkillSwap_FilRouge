<?php

namespace Database\Seeders;

use App\Models\Domains;
use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealDomainsAndSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Web Development' => [
                'HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'React', 'Angular', 'Vue.js', 'Node.js', 'SASS', 'TypeScript', 'Bootstrap', 'jQuery', 'Web Accessibility', 'SQL', 'MongoDB', 'MySQL', 'Express.js', 'Django', 'Flask'
            ],
            'Data Science' => [
                'Python', 'Pandas', 'NumPy', 'R', 'SQL', 'Data Visualization', 'Machine Learning', 'Deep Learning', 'TensorFlow', 'Keras', 'Scikit-learn', 'PyTorch', 'Data Cleaning', 'Jupyter', 'Big Data', 'Hadoop', 'Spark', 'Matplotlib', 'Seaborn'
            ],
            'Mobile Development' => [
                'Kotlin', 'Swift', 'React Native', 'Flutter', 'Java', 'Objective-C', 'Android', 'iOS', 'Xcode', 'Android Studio', 'Mobile UX/UI Design', 'Firebase', 'Dart', 'App Store Optimization', 'TestFlight', 'Google Play Console'
            ],
            'Cybersecurity' => [
                'Ethical Hacking', 'Network Security', 'Penetration Testing', 'Firewall', 'Risk Assessment', 'Cryptography', 'Malware Analysis', 'SIEM', 'Incident Response', 'Security Auditing', 'Security Protocols', 'Intrusion Detection Systems', 'ISO 27001', 'GDPR Compliance', 'Data Encryption', 'Vulnerability Scanning', 'Cloud Security', 'Application Security', 'Red Teaming', 'Blue Teaming'
            ],
            'Cloud Computing' => [
                'AWS', 'Azure', 'Docker', 'Kubernetes', 'Google Cloud', 'Cloud Architecture', 'Serverless Computing', 'Cloud Storage', 'Terraform', 'DevOps', 'CI/CD', 'Virtualization', 'Infrastructure as Code', 'Linux Administration', 'Cloud Security', 'Cloud Migration', 'Automation', 'Cloud Networking', 'Load Balancing', 'Backup and Recovery'
            ],
            'Artificial Intelligence' => [
                'Machine Learning', 'Deep Learning', 'Natural Language Processing', 'Reinforcement Learning', 'AI Ethics', 'Neural Networks', 'Computer Vision', 'Generative Adversarial Networks', 'AI Model Deployment', 'AI Testing', 'AI Frameworks', 'AI in Robotics', 'AI in Healthcare', 'Speech Recognition', 'Predictive Analytics'
            ],
            'DevOps' => [
                'Continuous Integration', 'Continuous Deployment', 'Jenkins', 'Docker', 'Kubernetes', 'Terraform', 'Ansible', 'CI/CD', 'Automation', 'Monitoring', 'Infrastructure as Code', 'Version Control', 'Git', 'Linux', 'Cloud Technologies', 'Nagios', 'Datadog', 'Prometheus', 'Helm', 'Vault'
            ],
            'Game Development' => [
                'Unity', 'Unreal Engine', 'C#', 'C++', 'Game Design', '3D Modeling', 'Game Mechanics', 'VR Development', 'AI in Games', 'Animation', 'Game Optimization', 'Game Testing', 'Multiplayer Games', 'Augmented Reality', 'Physics Engines', 'Game Prototyping', 'Character Design', 'Shader Programming'
            ],
            'Networking' => [
                'TCP/IP', 'DNS', 'Routing', 'Switching', 'Firewalls', 'VPN', 'Wi-Fi', 'Network Security', 'Load Balancing', 'Bandwidth Management', 'Network Troubleshooting', 'LAN/WAN', 'IPv4', 'IPv6', 'Network Topologies', 'Cisco', 'Juniper', 'Wireshark', 'MPLS'
            ],
            'UI/UX Design' => [
                'Wireframing', 'Prototyping', 'User Research', 'Figma', 'Sketch', 'Adobe XD', 'User Flow', 'Usability Testing', 'Information Architecture', 'Interaction Design', 'UI Design', 'UX Design', 'Responsive Design', 'Design Systems', 'Persona Creation', 'Wireframe to Code', 'Typography', 'Design Thinking', 'Color Theory'
            ],
            'Business Intelligence' => [
                'SQL', 'Data Visualization', 'Power BI', 'Tableau', 'Data Warehousing', 'ETL', 'Data Modeling', 'Reporting', 'Business Analysis', 'Big Data', 'Data Governance', 'Data Mining', 'KPIs', 'Predictive Analytics', 'Dashboard Creation', 'Advanced Excel', 'Business Metrics'
            ],
            'Blockchain' => [
                'Ethereum', 'Solidity', 'Smart Contracts', 'Cryptocurrency', 'Bitcoin', 'Blockchain Architecture', 'DApp Development', 'DeFi', 'NFTs', 'Consensus Mechanisms', 'Blockchain Security', 'Tokenomics', 'Web3', 'IPFS', 'Hyperledger', 'Blockchain Testing'
            ],
            'Project Management' => [
                'Agile', 'Scrum', 'Kanban', 'Jira', 'Trello', 'Project Planning', 'Risk Management', 'Stakeholder Management', 'Gantt Chart', 'Project Scheduling', 'Team Collaboration', 'Time Management', 'Budgeting', 'Project Reporting', 'Waterfall', 'Change Management', 'Product Management'
            ],
            'Database Management' => [
                'SQL', 'NoSQL', 'PostgreSQL', 'MySQL', 'MongoDB', 'Database Design', 'Database Optimization', 'Data Warehousing', 'T-SQL', 'PL/SQL', 'Stored Procedures', 'Triggers', 'Indexes', 'Backup and Recovery', 'Database Security', 'Replication', 'High Availability', 'Database Scaling'
            ]
        ];
    
        foreach ($data as $domainName => $skills) {
            $domain = Domains::firstOrCreate([
                'name' => $domainName]);
    
            foreach ($skills as $skill) {
                Skills::create([
                    'name' => $skill,
                    'domain_id' => $domain->id,
                ]);
            }
        }
    }
    
}
