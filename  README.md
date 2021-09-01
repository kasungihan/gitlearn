# Git Testing

undo origin and local both
`git revert 920e5eca112f595fe0297c79f78c51b70c9b6062`

last commit undo
`git revert -m 1 920e5eca112f595fe0297c79f78c51b70c9b6062`

remove file in th exisiting commit
`git checkout <commit hash> -- app.js`

local remove commit from head
`git reset HEAD^`

# Git Log file
show only commit no other details
`git log --oneline`

if you need disply only specific number of commit
`git log -1 --oneline`


This repository I used for testing purpose when I having a issue

## Add your files

- [ ] [Create](https://gitlab.com/-/experiment/new_project_readme_content:08acfb2a51f4832f7102aedb4a43861d?https://docs.gitlab.com/ee/user/project/repository/web_editor.html#create-a-file) or [upload](https://gitlab.com/-/experiment/new_project_readme_content:08acfb2a51f4832f7102aedb4a43861d?https://docs.gitlab.com/ee/user/project/repository/web_editor.html#upload-a-file) files
- [ ] [Add files using the command line](https://gitlab.com/-/experiment/new_project_readme_content:08acfb2a51f4832f7102aedb4a43861d?https://docs.gitlab.com/ee/gitlab-basics/add-file.html#add-a-file-using-the-command-line) or push an existing Git repository with the following command:

```
cd existing_repo
git remote add origin https://gitlab.com/kasungihan.dev/git-testing.git
git branch -M main
git push -uf origin main
```
