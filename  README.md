# Git Testing

Version and automate releases with semantic version control v(major.minor.patch)

# Git Branch

ancestor iscreeate branch point

## discard current change on files

`git checkout -- <filename>`

## discard current change on folder

`git checkout -- <dirname>`

## create new branch derive develpment with -d switch

`git checkout -b <feature> develpment`

## delete branch

`git branch -d <feature>`

## unstage from the already staged files

`git reset <filename>`

## the command will reset the existing commit

`git reset --hard HEAD~1`

## however create revert commit & undo origin and local both

`git revert 920e5eca112f595fe0297c79f78c51b70c9b6062`

## last commit undo

`git revert -m 1 920e5eca112f595fe0297c79f78c51b70c9b6062`

## remove file in th exisiting commit

`git checkout <commit hash> -- app.js`
`git reflog`

## local remove commit from head

`git reset HEAD^`

## throws away all your uncommitted changes.

`git reset --hard`

# Git Log file

## show only commit no other details

`git log --oneline`

## if you need disply only specific number of commit

`git log -1 --oneline`

## get feature and fix bugs

`git log --oneline --grep "^feat\|^fix\|^perf"`

## count total amount of feature commit

`git log --oneline --grep "^feat" | wc -l`

# Git Merge Branch

## fast forword merge

histories is move the merged branch(combines the histories)
`git merge <branch>`

always generates a merge commit with backtracking - 3-way merge
`git merge --no-ff <branch>`

squash do more commit into the one
`git rebase -i HEAD~3`
`git merge --squash feature/login`
`git reset --soft HEAD~3`

## Git Rebase Branch

rebasing is the proocess of moving or combining more commit into one, structure different order

## Git Rebase Branch

it's a way to replay commits one by one, on top of a branch not rewrite all the sha-1 ids
`git rebase -i HEAD~3`

# Git Tags

tagging is creating specific pionts in history(mark release) for repository that can be to restore data)

## git tags show

`git show`

This repository I used for testing purpose when I having a issue

# Git Fork

1. do the update you want areas

2. change original remote name to spstream
   `git remote rename origin upstream`

3. add new your origin - URL of our own fork
   `git remote add origin git@github.com:kasungihan/w3schools-test.github.io.git`

4. then create pull request on github account

## Add your files

- [ ] [Create](https://gitlab.com/-/experiment/new_project_readme_content:08acfb2a51f4832f7102aedb4a43861d?https://docs.gitlab.com/ee/user/project/repository/web_editor.html#create-a-file) or [upload](https://gitlab.com/-/experiment/new_project_readme_content:08acfb2a51f4832f7102aedb4a43861d?https://docs.gitlab.com/ee/user/project/repository/web_editor.html#upload-a-file) files
- [ ] [Add files using the command line](https://gitlab.com/-/experiment/new_project_readme_content:08acfb2a51f4832f7102aedb4a43861d?https://docs.gitlab.com/ee/gitlab-basics/add-file.html#add-a-file-using-the-command-line) or push an existing Git repository with the following command:

```
cd existing_repo
git remote add origin https://gitlab.com/kasungihan.dev/git-testing.git
git branch -M main
git push -uf origin main
```

## Gitlab app in slack

App ID A03QHCBN9M4
Client ID 2654714146629.3833419757718
Client Secret f6b2b8abbe12a956fa72df87796b0909
Signing Secret ffbec9c880979d36f60bfd2c07b274aa
