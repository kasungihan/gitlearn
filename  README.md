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

`git tag`
`git show <tagname>`
`git tag -l "v1.*"`

## git create tag

`git tag <tagname>`

create annotated tate tags
`git tag -a v1.0.0-beta -m "tag for release beta version 1.0.0"`

## git delete tag

`git tag -d <tagname>`
`git tag -delete <tagname>`
delte from the repository as well
`git push origin -d <tagname>`
creeate a branch from a tag and checkout branch
`git checkout -b <branchversionname> <tagversionname>`
create a tag form some post commit (get old version again)
`git tag <tagname> <commit-sha>`

## git push tag

`git push origin <tagname>`
push all the tags
`git push --tags`

# Git tagging step and sementic version

1. create tags when you complete tasks
   `git tag -a v1.0.0 -m "tag for release version 1.0.0"`
2. push tag to remote
   `git tag origin <tagname>`
3. create release branch drive from tag
   `git checkout -b release-v1.0.0 v1.0.0`

# Git Standsard Version

1. install npm standard-version package
   `npm i --save-dev standard-version`

2. update npm script
   `"version": "1.12.0",`

```js
{
  "scripts": {
    "release": "standard-version"
  }
}
```

3. get release branch and merge to master

4. run minor release, next time run only argument major, minor or patch.
   `npm run release -- --release-as minor`

5. push the tag to origin
   `git push origin v1.12.0`

if you want to fix something versiontag get branch from tags

fix change
feat and fix put withou icon

This repository I used for testing purpose when I having a issue

# Git Fork

1. do the update you want areas

2. change original remote name to spstream
   `git remote rename origin upstream`

3. add new your origin - URL of our own fork
   `git remote add origin git@github.com:kasungihan/w3schools-test.github.io.git`

4. then create pull request on github account

## Github with slack intergation

create webhook app in slack

App ID ****\*\*****
Client ID **********\*\*\***********
Client Secret **********\*\*\*\***********
Signing Secret ****\*\*****\*\*****\*\*\*\*****
