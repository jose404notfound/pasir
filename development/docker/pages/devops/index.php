<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/services/db/auth/auth_functions.php';
secure_session_start();
require_auth();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps.</title>
    <link rel="stylesheet" href="/styles/devops.css">
</head>
<body>
    <div class="container">
        <h1 class="title">DevOps.</h1>
        <p>DevOps is a methodology that combines software development (Dev) and IT operations (Ops) to improve collaboration, automation, and continuous application delivery.</p>
        <div class="sections">
            <section>
                <h2>Roadmap.</h2>
                <ul>
                    <li><a href="https://roadmap.sh/devops">Roadmap DevOps.</a></li>
                    <li><a href="https://roadmap.sh/docker">Roadmap Docker.</a></li>
                    <li><a href="https://roadmap.sh/kubernetes">Roadmap Kubernetes.</a></li>
                    <li><a href="https://roadmap.sh/git-github">Roadmap Git and GitHub.</a></li>
                    <li><a href="https://roadmap.sh/terraform">Roadmap Terraform.</a></li>
                    <li><a href="https://roadmap.sh/python">Roadmap Python.</a></li>
                    <li><a href="https://roadmap.sh/linux">Roadmap Linux.</a></li>
                </ul>
            </section>
            <section>
                <h2>Docker.</h2>
                <ul>
                    <li><a href="https://www.docker.com/">Docker Official Website.</a></li>
                    <li><a href="https://docs.docker.com/">Docker Documentation.</a></li>
                    <li><a href="https://docs.docker.com/manuals">Docker Manuals.</a></li>
                    <li><a href="https://docs.docker.com/guides/">Docker Guides.</a></li>
                    <li><a href="https://docs.docker.com/reference/">Docker Reference.</a></li>
                    <li><a href="https://docs.docker.com/community/">Docker Community.</a></li>
                    <li><a href="https://hub.docker.com/">Docker Hub.</a></li>
                    <li><a href="https://github.com/docker">Docker GitHub Official.</a></li>
                    <li><a href="https://docs.docker.com/trainings/">Docker Trainings.</a></li>
                    <li><a href="https://training.mirantis.com/certification/dca-certification-exam/">Docker Certifications Official.</a></li>
                </ul>
            </section>
            <section>
                <h2>Kubernetes.</h2>
                <ul>
                    <li><a href="https://kubernetes.io/">Kubernetes Official Website.</a></li>
                    <li><a href="https://kubernetes.io/docs/home/">Kubernetes Documentation.</a></li>
                    <li><a href="https://kubernetes.io/docs/concepts/">Kubernetes Concepts.</a></li>
                    <li><a href="https://kubernetes.io/docs/tasks/">Kubernetes Tasks.</a></li>
                    <li><a href="https://kubernetes.io/docs/tutorials/">Kubernetes Tutorials.</a></li>
                    <li><a href="https://kubernetes.io/docs/reference/">Kubernetes Reference.</a></li>
                    <li><a href="https://kubernetes.io/community">Kubernetes Community.</a></li>
                    <li><a href="https://github.com/kubernetes">Kubernetes GitHub Official.</a></li>
                    <li><a href="https://kubernetes.io/training/">Kubernetes Training and Certifications.</a></li>
                </ul>
                <h3>Helm.</h3>
                <ul>
                    <li><a href="https://helm.sh/">Helm Official Website.</a></li>
                    <li><a href="https://helm.sh/docs/">Helm Documentation.</a></li>
                    <li><a href="https://helm.sh/docs/charts_tips_and_tricks/">Helm Chart How-to Guides.</a></li>
                    <li><a href="https://helm.sh/docs/topics//">Helm Topics.</a></li>
                    <li><a href="https://helm.sh/docs/chart_best_practices/">Helm Chart Best Practices.</a></li>
                    <li><a href="https://helm.sh/docs/chart_template_guide/">Helm Chart Template Guide.</a></li>
                    <li><a href="https://helm.sh/docs/helm/">Helm Commands.</a></li>
                    <li><a href="https://artifacthub.io/">Helm Community.</a></li>
                    <li><a href="https://artifacthub.io/">Helm Charts - Artifactory.</a></li>
                    <li><a href="https://github.com/helm">Helm GitHub Official.</a></li>
                </ul>
            </section>
            <section>
                <h2>Git.</h2>
                <ul>
                    <li><a href="https://git-scm.com/">Git Official Website.</a></li>
                    <li><a href="https://git-scm.com/doc/">Git Documentation.</a></li>
                    <li><a href="https://git-scm.com/docs/">Git Reference.</a></li>
                    <li><a href="https://git-scm.com/book/en/v2/">Git Book.</a></li>
                    <li><a href="https://git-scm.com/videos/">Git Official Videos.</a></li>
                    <li><a href="https://git-scm.com/doc/ext/">Git External Links.</a></li>
                    <li><a href="https://git-scm.com/community/">Git Community.</a></li>
                </ul>
            </section>
            <section>
                <h2>GitHub.</h2>
                <ul>
                    <li><a href="https://github.com/en/">GitHub Official Website.</a></li>
                    <li><a href="https://docs.github.com/en/">GitHub Documentation.</a></li>
                    <li><a href="https://github.com/community">GitHub Community.</a></li>
                </ul>
                <h4>GitHub - CI/CD and DevOps.</h4>
                <ul>
                    <li><a href="https://docs.github.com/en/actions">GitHub Actions.</a></li>
                    <li><a href="https://docs.github.com/en/actions/writing-workflows">GitHub Actions Writing Workflows.</a></li>
                    <li><a href="https://docs.github.com/en/packages">GitHub Packages.</a></li>
                    <li><a href="https://docs.github.com/en/pages">GitHub Pages.</a></li>
                    <li><a href="https://docs.github.com/en/get-started/showcase-your-expertise-with-github-certifications/">About GitHub Certifications.</a></li>
                </ul>
            </section>
            <section>
                <h2>GitLab.</h2>
                <ul>
                    <li><a href="https://about.gitlab.com/en/">GitLab Official Website.</a></li>
                    <li><a href="https://docs.gitlab.com/">GitLab Documentation.</a></li>
                    <li><a href="https://docs.gitlab.com/tutorials/">GitLab Tutorials.</a></li>
                    <li><a href="https://docs.gitlab.com/administration/">GitLab Administration.</a></li>
                    <li><a href="https://docs.gitlab.com/user/">GitLab User.</a></li>
                    <li><a href="https://about.gitlab.com/community/">GitLab Community.</a></li>
                    <li><a href="https://github.com/gitlabhq">GitLab GitHub Official</a></li>
                    <li><a href="https://university.gitlab.com/pages/certifications/">GitLab Certifications.</a></li>
                </ul>
                <h4>GitLab - CI/CD and DevOps.</h4>
                <ul>
                    <li><a href="https://docs.gitlab.com/topics/build_your_application/">GitLab CI/CD.</a></li>
                    <li><a href="https://docs.gitlab.com/ci/yaml/">GitLab CI/CD YAML Syntax Reference.</a></li>
                    <li><a href="https://docs.gitlab.com/ci/runners/">GitLab CI/CD Runners.</a></li>
                    <li><a href="https://docs.gitlab.com/ci/pipelines/">GitLab CI/CD Pipelines.</a></li>
                    <li><a href="https://docs.gitlab.com/ci/jobs/">GitLab CI/CD Jobs.</a></li>
                    <li><a href="https://docs.gitlab.com/ci/components/">GitLab CI/CD Components.</a></li>
                    <li><a href="https://docs.gitlab.com/ci/variables/">GitLab CI/CD Variables.</a></li>
                    <li><a href="https://docs.gitlab.com/ci/pipelines/pipeline_security/">GitLab CI/CD Pipeline Security.</a></li>
                </ul>
            </section>
            <section>
                <h2>Terraform.</h2>
                <ul>
                    <li><a href="https://developer.hashicorp.com/terraform">Terraform Official Website.</a></li>
                    <li><a href="https://developer.hashicorp.com/terraform/docs">Terraform Documentation.</a></li>
                    <li><a href="https://developer.hashicorp.com/terraform/docs/language">Terraform Language Documentation.</a></li>
                    <li><a href="https://developer.hashicorp.com/terraform/cli">Terraform CLI Documentation.</a></li>
                    <li><a href="https://developer.hashicorp.com/terraform/cloud-docs">Terraform HCP.</a></li>
                    <li><a href="https://registry.terraform.io/">Terraform Registry.</a></li>
                    <li><a href="https://registry.terraform.io/browse/providers">Terraform Registry Providers.</a></li>
                    <li><a href="https://registry.terraform.io/browse/modules">Terraform Registry Modules.</a></li>
                    <li><a href="https://github.com/hashicorp/terraform">Terraform GitHub Official</a></li>
                    <li><a href="https://developer.hashicorp.com/certifications">Terraform Certifications.</a></li>
                </ul>
            </section>
            <section>
                <h2>Ansible.</h2>
                <ul>
                    <li><a href="https://docs.ansible.com/">Ansible Documentation.</a></li>
                    <li><a href="https://docs.ansible.com/users.html">Ansible Documentation Users.</a></li>
                    <li><a href="https://docs.ansible.com/developers.html">Ansible Documentation Developers</a></li>
                    <li><a href="https://docs.ansible.com/ansible/latest/">Ansible Community Documentation Latest</a></li>
                    <li><a href="https://docs.ansible.com/ansible/devel/">Ansible Community Documentation Development</a></li>
                    <li><a href="https://github.com/ansible/">Ansible GitHub Official</a></li>
                </ul>
            </section>
            <section>
                <h2>Cloud.</h2>
                <h3>AWS</h3>
                <ul>
                    <li><a href="https://aws.amazon.com/">AWS Official Website.</a></li>
                    <li><a href="https://docs.aws.amazon.com/">AWS Documentation.</a></li>
                    <li><a href="https://aws.amazon.com/developer/">AWS Developer Center.</a></li>
                    <li><a href="https://aws.amazon.comdeveloper/learning/devops-on-aws/">AWS DevOps.</a></li>
                    <li><a href="https://github.com/aws">AWS GitHub Official.</a></li>
                    <li><a href="https://aws.amazon.com/training/">AWS Training and Certifications.</a></li>

                </ul>
                <h3>Azure</h3>
                <ul>
                    <li><a href="https://azure.microsoft.com/">Azure Official Website</a></li>
                    <li><a href="https://learn.microsoft.com/en-us/azure/">Azure Documentation</a></li>
                    <li><a href="https://learn.microsoft.com/en-us/azure/?product=developer-tools">Azure Documentation Developer Tools.</a></li>
                    <li><a href="https://learn.microsoft.com/en-us/azure/?product=devops">Azure Documentation Devops.</a></li>
                    <li><a href="https://github.com/azure">Azure GitHub Official.</a></li>
                    <li><a href="https://azure.microsoft.com/en-us/resources/training-and-certifications/">Azure Training and Certifications.</a></li>
                </ul>
                    <h3>Google Cloud</h3>
                <ul>
                    <li><a href="https://cloud.google.com/">Google Cloud Official Website</a></li>
                    <li><a href="https://cloud.google.com/docs">Google Cloud Documentation</a></li>
                    <li><a href="https://cloud.google.com/docs/application-development">Google Cloud Developer Application Development</a></li>
                    <li><a href="https://cloud.google.com/developers">Google Cloud Developer Center</a></li>
                    <li><a href="https://github.com/googlecloudPlatform/">Google Cloud GitHub Official.</a></li>
                    <li><a href="https://cloud.google.com/learn/training">Google Cloud Training and Certifications.</a></li>
                </ul>
            </section>
        </div>
    </div>
<a href="/home" class="back-button">Return to Menu.</a>
</body>
</html>
