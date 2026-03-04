1.git configuration commands
syntax:git config --global user.name 
purpose:this command sets your git username globally on your system.It will be used in all repositories to identify who made the  commits
example:git config --global user.name "prasanna"

syntax:git config --global user.email
purpose:sets your email globally for git this email will be attched to your commits
example:git config --global user.email "n221001@rguktn.ac.in"

syntax:git config --list
purpose:displays all git configuration settings(username,email,editor)
example:git config --list

syntax:git config --unset
purpose:removes a git configuration value 
example :git config --unset user.name

2.repository setup commands
syntax:git init
purpose:initializes a new git repository in your current project folder
example:git init

syntax:git clone
purpose:creates a copy of a remote repository from platforms like github to your local system
example:git clone https://github.com/prasanna-n221001/php_smartportal

syntax:git clone --branch <branchname> <repositoryurl>
purpose:clones a specific branch instead of default branch
example:git clone --branch develop https://github.com/prasanna-n221001/php_smartportal

syntax:git clone --depth <number><repo url>
purpose:performs a shallow clone (downloads limited commit history).Imporvws spedd and reduces storage
example:git clone --depth 1 https://github.com/prasanna-n221001/php_smartportal

3.repository status and inspection
syntax:git status
purpose:show the current state of the working directory and stagging area
example:git status

syntax:git log
purpose:displays detaild commit history (commit id,author,date,message)

syntax:git log --oneline
purpose:showa compact version of commit history(one line per commit)

syntax:git log --graph --oneline --all
purpose:displays commit history in grpahical format

syntax:git show <commit-id>
purpose:shows detailed information about a specific commit including changes made

syntax:git diff
purpose:shows differences between working directory and stagging area

syntax:git diff --stagged
purpose:shows differences between stagged files and last commit