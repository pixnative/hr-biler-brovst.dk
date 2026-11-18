# hr-biler-brovst.dk

Project for H. Rasmussen Biler, live at https://hr-biler-brovst.dk. This repository is `pixnative/hr-biler-brovst.dk`.
README.md holds the project notes; it is also edited from the project page on Pixnative, so keep it accurate.

## Hosting

Plesk deploys the default branch of this repository to the website's `httpdocs` on every push, and the
web server's document root is `httpdocs/public`. So everything the browser may fetch lives in `public/`
(the front controller `public/index.php`, assets), all other code and configuration live outside it, and
secrets stay in a `.env` on the server, never in the repository.

## Working tasks

Tasks for this repository are managed on Pixnative (https://app.pixnative.com) and reached through its JSON API with the
credentials you were given separately. Claim the next one with `POST /api/tasks/claim`: it comes back
assigned to you, in "In progress", with a fresh `branch` (`task/<slug>-<id>`) created from the default
branch. Only one task of this project runs at a time. Each task has a `prompt` and a Markdown `description`.

- Before writing code: if the task's description is empty, write it from the prompt (goal, scope,
  acceptance criteria, planned approach) and save it to the task.
- Check out the task's branch (`git fetch origin && git checkout <branch>`). Commit and push automatically,
  without asking, after every coherent change and always before you stop; never leave work uncommitted.
  Never push to the default branch directly.
- When the code is pushed, move the task to "Agent review" as your last step. Never move it to "Customer review" or "Done": a code agent reviews the
  preview website, then a person reviews the task, and Pixnative opens the pull request to the default branch when they approve.
- You run unattended: nobody answers questions. Make a reasonable assumption, note it under
  "## Agent notes" in the task description and carry on.
