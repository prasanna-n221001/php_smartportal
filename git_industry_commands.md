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

syntax:git blame <filename>
purpose:shows who modified each line of a file and in which commit

syntax:git reflog
purpose:shows history of HEAD movements(commits,resets,checkouts).very useful to recover lost commits

syntax:git shortlog
purpose:summarizes commit history grouped by author

4.file tracking commands
syntax:gti add <filename>
purpose:adds a specific file to the stagging area

syntax:git add .
purpose:adds all modified and new files in the current directory(and subdirectories) to staging

syntax:git add -p
purpose:adds changes interactively (patch mode)you can stage specific parts of a file instead of the whole file

git restore <filename>
discard changes in the working directory(restores file to last commited state)

git restore --staged
removes file from staging area but keeps changes in working directory

git rm<filename>
deletes file from working directory and stages the deletion

git mv <oldname><newname>
removes or moves a file and stages the change

5.commit commands
git commit
creates a commit from the staged changes.opens the default editor to write a commit message

git commit -m "your message"
creates a commit with a message directly in the command line

git commit --amend
modifies the last commit

git commit --ammend --no-edit
amends the last commit without changing the commit message

6.branch management commands
git branch
lists all local branches in your repository

git brannch -a
lists all branches(local_remote)

git branch -d <branchname>
delets a branch safely(only if it is already merged)

git branch -D <branchname>
forces deleted a branch(even if not merged)

gti checkout <branchname>
switches to another branch

git checkout -b <newbranchname>
creates a new branch and switches to it immediately

git switch
switches braches(modern alternative to chekcout)

git switch -c <new branchname>
creates a new branch and switches to it


7.merge and interpretation commands
git merge <branchname>
combines changes from another branch into the current branch
git merge develop

git merge --no-ff <branchname>
froces git to create a merge commit even if fast-forward is possible
git merge --no-ff branch1

8.remote repository commands
A.git remote 
shows the names of remote repositories linked to your project
git remote

B.git remote -v
shows remote names along with their URLs(fetch and push)

C.git remote add <name><url>
adds a new remote repository
git remote add origin https://github.com/prasanna-n221001/php_smartportal

D.git remote remove <name>
removes a remote repository
git remote remove origin

E.git fetch
downloads changes from remote without merging
git fetch origin

F.git fethc -all 
fethces updates from all remotes