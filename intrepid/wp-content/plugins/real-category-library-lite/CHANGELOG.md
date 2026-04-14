# Change Log

All notable changes to this project will be documented in this file.
See [Conventional Commits](https://conventionalcommits.org) for commit guidelines.

## 4.2.64 (2026-02-05)


### Bug Fixes

* compatibility with WooCommerce attributes (CU-869c1arhc)


<details><summary>Dependency updates @devowl-wp/utils 1.20.13</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* compatibility with Hostinger and services could not be created (CU-869c14a9d)</details>





## 4.2.63 (2026-02-02) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.6.3</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* avoid passing complete zod schemas to ContractResponse (CU-869bdvdfh)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.32</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* compatibility with Weblate 5.13 (file form params) and correctly create create/update component source file (CU-869bu5atn)


##### Build System

* correctly fetch languages for frontends (CU-869bu5atn)</details>





## 4.2.62 (2026-01-23) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.15</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Bug Fixes

* validate container registry image did not catch curl errors correctly (CU-86931jwau)</details>





## 4.2.61 (2026-01-20) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Code Refactoring

* migrate from Jest to Vitest and clean up related configurations (CU-86931jwau)
* migrate to ESM (CU-861mnuuc5)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


### Maintenance

* upgrade dependencies (CU-86931jwau)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.127</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* make CI build work (CU-861mnuuc5)
* upgrade dependencies (CU-86931jwau)</details>

<details><summary>Dependency updates @devowl-wp/react-folder-tree 0.1.23</summary>


**_Purpose of dependency:_** _Feature-rich folder tree renderer with toolbar (formerly react-aiot)._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* upgrade dependencies (CU-86931jwau)</details>

<details><summary>Dependency updates @devowl-wp/react-utils 1.0.16</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.20.10</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Code Refactoring

* migrate from Jest to Vitest and clean up related configurations (CU-86931jwau)
* migrate to ESM (CU-861mnuuc5)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* upgrade dependencies (CU-86931jwau)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.14.10</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Code Refactoring

* migrate from Jest to Vitest and clean up related configurations (CU-86931jwau)
* migrate to ESM (CU-861mnuuc5)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* upgrade dependencies (CU-86931jwau)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.20.10</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Code Refactoring

* migrate from Jest to Vitest and clean up related configurations (CU-86931jwau)
* migrate to ESM (CU-861mnuuc5)
* remove deprecated packages which are coming with native Node 24 (CU-86931jwau)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* make CI build work (CU-861mnuuc5)
* upgrade dependencies (CU-86931jwau)</details>

<details><summary>Development dependency update @devowl-wp/api 1.6.1</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* add HTTP 410 Gone status for deleted reports in order service (CU-8699tgz5g)
* add media upload functionality for logos (CU-8699tgz5g)
* adjust Content-Type handling in fetch client to allow browser to set for FormData (CU-8699tgz5g)
* do not hide internal routes in OpenAPI in non-production environments (CU-8699tgz5g)
* improve developer experience as using schema-mutable methods outside the middleware looses validations and refinements (CU-8699tgz5g)
* prevent duplicate tags in OpenAPI document generation (CU-8699tgz5g)
* review points including 20 (CU-8699tgz5g)
* throw runtime error when refine is used in schema definition (CU-8699tgz5g)


##### Code Refactoring

* migrate from Jest to Vitest and clean up related configurations (CU-86931jwau)
* migrate to ESM (CU-861mnuuc5)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* update refine function parameter naming for consistency across schemas (CU-8699tgz5g)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Documentation

* enhance group management by introducing parent relationships and sorting (CU-8699tgz5g)


##### Maintenance

* upgrade to Node 24 (CU-86931jwau)</details>

<details><summary>Development dependency update @devowl-wp/composer-licenses 0.1.20</summary>


**_Purpose of dependency:_** _Helper functionalities for your composer project to validate licenses and generate a disclaimer._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.13</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Bug Fixes

* only scan current branch with gitleaks (CU-869aw6tca)


##### Code Refactoring

* migrate from Jest to Vitest and clean up related configurations (CU-86931jwau)
* migrate to ESM (CU-861mnuuc5)
* remove deprecated packages which are coming with native Node 24 (CU-86931jwau)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* replace execSync with spawnSync for improved command execution consistency and security (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* use complyforce.com as production domain (CU-8699th190)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.30</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* improve weblate component settings sync for file formats (CU-86931jwau)


##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* remove deprecated packages which are coming with native Node 24 (CU-86931jwau)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* replace execSync with spawnSync for improved command execution consistency and security (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* make CI build work (CU-861mnuuc5)
* upgrade dependencies (CU-86931jwau)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.21</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Code Refactoring

* migrate from Jest to Vitest and clean up related configurations (CU-86931jwau)
* migrate to ESM (CU-861mnuuc5)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* replace execSync with spawnSync for improved command execution consistency and security (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* upgrade dependencies (CU-86931jwau)
* upgrade to Node 24 (CU-86931jwau)
* use Relation type for ESM preparation in TypeORM relations (CU-861mnuuc5)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.22</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* replace execSync with spawnSync for improved command execution consistency and security (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* make CI build work (CU-861mnuuc5)
* upgrade dependencies (CU-86931jwau)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.14</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* remove deprecated packages which are coming with native Node 24 (CU-86931jwau)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* replace execSync with spawnSync for improved command execution consistency and security (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* make CI build work (CU-861mnuuc5)</details>

<details><summary>Development dependency update @devowl-wp/npm-licenses 0.1.15</summary>


**_Purpose of dependency:_** _Helper functionalities for your project to validate licenses and generate a disclaimer._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)</details>

<details><summary>Development dependency update @devowl-wp/phpcs-config 0.1.19</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPCS._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)</details>

<details><summary>Development dependency update @devowl-wp/regexp-translation-extractor 0.2.47</summary>


**_Purpose of dependency:_** _Provide a performant translation extractor based on regular expression._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)</details>

<details><summary>Development dependency update @devowl-wp/ts-config 0.1.19</summary>


**_Purpose of dependency:_** _Predefined compiler options for our backends._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.52</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Code Refactoring

* migrate to ESM (CU-861mnuuc5)
* remove deprecated packages which are coming with native Node 24 (CU-86931jwau)
* remove fs-extra, use fs:promise and disallow blocking/sync methods (CU-86931jwau)
* replace execSync with spawnSync for improved command execution consistency and security (CU-86931jwau)
* safer usage of imports and exports with TypeScript's verbatimModuleSyntax option (CU-861mhn5rj)
* use package.json#exports everywhere for ESM preparation (CU-861mnuuc5)


##### Maintenance

* make CI build work (CU-861mnuuc5)
* upgrade dependencies (CU-86931jwau)</details>





## 4.2.60 (2026-01-15) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Maintenance

* remove package.json#engines from internal packages (CU-86931jwau)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.126</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Maintenance

* remove package.json#engines from internal packages (CU-86931jwau)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.20.9</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* remove package.json#engines from internal packages (CU-86931jwau)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.14.9</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* remove package.json#engines from internal packages (CU-86931jwau)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.20.9</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Maintenance

* remove package.json#engines from internal packages (CU-86931jwau)


##### Performance Improvements

* allow to configure to put the huge JSON to the bottom of the HTML via RCB/Experimental/OptimizedWpLocalizeScript hook (CU-869b9znyx)</details>

<details><summary>Development dependency update @devowl-wp/api 1.6.0</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Features

* refactor new Contract API (CU-8699twn1u)


##### Maintenance

* ai review (CU-8699twn1u)
* fix issues found in testing (CU-8699twn1u)
* fix purpose in contracts ((CU-8699twn1u)
* remove package.json#engines from internal packages (CU-86931jwau)</details>





## 4.2.59 (2025-12-04) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.5.0</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Features

* inital implementation of object-storage package (CU-8697h8axv)
* introduce contract profiles with predefined internal profile to exclude from OpenAPI (CU-8699tgz5g)</details>





## 4.2.58 (2025-12-02)


### Bug Fixes

* term_order column is not created on a MySQL instance with multiple databases which hold WordPress (CU-869ayp0zd)


### Maintenance

* compatibility with WordPress 6.9 (CU-869bakzm8)


<details><summary>Development dependency update @devowl-wp/api 1.4.2</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* implement missing file multipart upload in contracts (CU-869badh12)
* implement missing file multipart upload in contracts fetch-client (CU-869badh12)</details>





## 4.2.57 (2025-11-21) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.4.1</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* allow to set a x-tagGroups via route details (CU-8699tgz5g)
* remove redundant delivery ack policy handling (CU-869am6b3b)


##### Maintenance

* upgrade zod to latest v4 and refactor to zod imports instead of zod/v4 (CU-8699tgz5g)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.12</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Maintenance

* introduce secret-scanner with gitleaks (CU-869aw6tca)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.20</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Maintenance

* upgrade zod to latest v4 and refactor to zod imports instead of zod/v4 (CU-8699tgz5g)</details>





## 4.2.56 (2025-10-15) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.122</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.20.5</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.14.5</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.20.5</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)</details>

<details><summary>Development dependency update @devowl-wp/api 1.4.0</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* allow to create literal error code responses (CU-8699tgz5g)
* allow to define routes to be a webhook (CU-8699tgz5g)
* enhance vendor management contracts with new API endpoints and schema updates (CU-8699tgz5g)
* make optional recursion schema properties work as expected (CU-8699tgz5g)


##### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)


##### Documentation

* user session and magic link routes improved (CU-8699tgz5g)


##### Features

* enhance vendor and user management with new API endpoints and schema updates (CU-8699tgz5g)
* introduce a contract-first design for message brokers with delivery-tuning (CU-869am6b3b)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.28</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* compatibility with the new q parameter in autotranslate since Weblate 5.13 (CU-869ar5pcu)
* update error handling for existing languages (CU-869ar5pcu)</details>

<details><summary>Development dependency update @devowl-wp/regexp-translation-extractor 0.2.45</summary>


**_Purpose of dependency:_** _Provide a performant translation extractor based on regular expression._
##### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)</details>

<details><summary>Development dependency update @devowl-wp/ts-config 0.1.18</summary>


**_Purpose of dependency:_** _Predefined compiler options for our backends._
##### Continuous Integration

* correctly type check with --project instead of cd into the TypeScript project folder (CU-8697h8axv)</details>





## 4.2.55 (2025-09-24) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Documentation

* access to source files of plugin (CU-869ad3694)


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.10</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* oss-extract only in master pipeline (CU-869ad3694)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.19</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Build System

* introduce .oss.ts and oss-extract CLI (CU-869ad3694)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.19</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Build System

* introduce .oss.ts and oss-extract CLI (CU-869ad3694)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.49</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Build System

* introduce .oss.ts and oss-extract CLI (CU-869ad3694)</details>





## 4.2.54 (2025-09-12) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.3.2</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* allow v1, v2, ... versioning beside semantic versioning for contract (CU-8699tgz5g)
* remove undefined values from URLSearchParams (CU-869ad2n4f)


##### Documentation

* add another example for multiple nested recursion objects (CU-8699tgz5g)
* uncaught Error: Cannot find module 'node:async_hooks'</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.26</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* correctly check when a missing language already existed before (CU-8699tdjp0)</details>





## 4.2.53 (2025-09-04) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.3.1</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* content length is not always respond by server if using e.g. Cloudflare with Transfer-Encoding: chunked (CU-869ac6g7m)</details>





## 4.2.52 (2025-09-04) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.3.0</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* a fetch client need to pass the API version (CU-869a8xjjf)
* run guard schema validations isolated from complete contract schema validation (CU-8699z5dt7)


##### Code Refactoring

* migrate from @devowl-wp/api-request to new fetch client (CU-869a8xjjf)


##### Documentation

* add README for contract-first instroductions (CU-8699z5dt7)


##### Features

* introduce type-safe createFetchClient from all contracts (CU-869a8xjjf)


##### Tests

* add Vitest test runner for our contracts and introduce a first draft for a RPC client type generator (CU-869a8xjjf)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.9</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Build System

* introduce Complyforce API backend (CU-8699tdjp0)


##### Continuous Integration

* pnpm-lock.yaml should be considered as common file change (CU-869a875re)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.18</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Bug Fixes

* switch from node fetch to undici request and make it work with streams and content encoding (CU-86997627z)</details>





## 4.2.51 (2025-08-25) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.20.0</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Features

* translate into Slovenian and Croatia (CU-8699ce5ba)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.14.0</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Features

* translate into Slovenian and Croatia (CU-8699ce5ba)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.20.0</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Features

* translate into Slovenian and Croatia (CU-8699ce5ba)</details>

<details><summary>Development dependency update @devowl-wp/api 1.2.1</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* make API contracts aware of recursion, parameters to object for refinable schema and switch language contexts correctly (CU-8699z5dt7)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.24</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* after creating a language wait for component to be idle and no task is running (CU-8699ce5ba)


##### Continuous Integration

* handle 404 error correctly after tasks was in progress previously (CU-8699ce5ba)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.47</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Build System

* ignore async_hooks in webpack (CU-8699z5dt7)</details>





## 4.2.50 (2025-08-08) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.2.0</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Features

* make API contracts compatible with OpenAPI, move guards to API definition and automatically generate API UI (CU-8699z5dt7)</details>





## 4.2.49 (2025-07-29) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.8</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* resource group for Docker Review deployments to avoid race condition in Swarm subnet allocation (CU-8699xj5ue)


##### Tests

* introduce optional playwright coverage with c8 (CU-8699761na)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.17</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Bug Fixes

* compatibility with latest version of Taskfile (CU-8699761na)</details>





## 4.2.48 (2025-07-27) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/utils 1.19.35</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* uncaught InvalidArgument IdnaEncoder::encode() Argument [#1](https://git.owlinfra.de/devowlio/devowl-wp/issues/1) () must be of type string|Stringable, NULL given</details>





## 4.2.47 (2025-07-23) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/utils 1.19.34</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* better anti ad-block system against Ghostery (CU-8697fw0r4)</details>





## 4.2.46 (2025-07-16) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 1.1.8</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* introduce translation options for fields and enhance translation handling in forms (CU-8699f32x9)</details>





## 4.2.45 (2025-07-10)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/utils 1.19.32</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* warning is_readable(): open_basedir restriction in effect (CU-8699fqkav)</details>





## 4.2.44 (2025-07-10)


### Bug Fixes

* deprecation notices when using PHP 8.4 in plugin-update-checker dependency (CU-8699fymmg)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.110</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Bug Fixes

* deprecation notices when using PHP 8.4 in plugin-update-checker dependency (CU-8699fymmg)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.48</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* deprecation notices when using PHP 8.4 in plugin-update-checker dependency (CU-8699fymmg)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.31</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Bug Fixes

* deprecation notices when using PHP 8.4 in plugin-update-checker dependency (CU-8699fymmg)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.31</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* deprecation notices when using PHP 8.4 in plugin-update-checker dependency (CU-8699fymmg)
* double slash for the chunked translation files (CU-8699fqkav)</details>

<details><summary>Development dependency update @devowl-wp/composer-licenses 0.1.19</summary>


**_Purpose of dependency:_** _Helper functionalities for your composer project to validate licenses and generate a disclaimer._
##### Bug Fixes

* deprecation notices when using PHP 8.4 in plugin-update-checker dependency (CU-8699fymmg)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.7</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* allow to recreate the gitlab-ci image manually (CU-8696heugb)
* docker review should not rely on manual containerize job (CU-8696heugb)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.17</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Tests

* vitest/prefer-expect-resolves (CU-8698r80f9)</details>

<details><summary>Development dependency update @devowl-wp/phpcs-config 0.1.18</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPCS._
##### Bug Fixes

* deprecation notices when using PHP 8.4 in plugin-update-checker dependency (CU-8699fymmg)</details>

<details><summary>Development dependency update @devowl-wp/ts-config 0.1.17</summary>


**_Purpose of dependency:_** _Predefined compiler options for our backends._
##### Bug Fixes

* stabilize scrolling and stats with timer (CU-8696heugb)</details>





## 4.2.43 (2025-06-25) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Maintenance

* upgrade to TypeScript 5.8 (CU-8697uqxnq)
* use PNPM catalog feature (CU-8699ec2dm)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.109</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Maintenance

* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Dependency updates @devowl-wp/react-folder-tree 0.1.16</summary>


**_Purpose of dependency:_** _Feature-rich folder tree renderer with toolbar (formerly react-aiot)._
##### Maintenance

* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Dependency updates @devowl-wp/react-utils 1.0.9</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Maintenance

* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.47</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* use correct remote language in continuous localization (CU-8699ce5ba)
* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.30</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* use correct remote language in continuous localization (CU-8699ce5ba)
* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.30</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Maintenance

* upgrade to TypeScript 5.8 (CU-8697uqxnq)
* use correct remote language in continuous localization (CU-8699ce5ba)
* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Development dependency update @devowl-wp/api 1.1.6</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* make contract and entity schemas translatable with i18next (CU-8697uqxnq)


##### Code Refactoring

* introduce contracts for api case study (CU-8697uqxnq)


##### Maintenance

* implement learnings from presentation for API contracts (CU-8697uqxnq)
* started to work on a type-safe client fetch wrapper (CU-8697uqxnq)
* use PNPM catalog feature (CU-8699ec2dm)
* use zod/v4 instead of v4 beta package and use Zod locales for error messages (CU-8697uqxnq9)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.6</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* only release clouflare worker when changes are made (CU-869954ppf)


##### Maintenance

* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.21</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Maintenance

* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.16</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Maintenance

* upgrade to TypeScript 5.8 (CU-8697uqxnq)
* use PNPM catalog feature (CU-8699ec2dm)
* use zod/v4 instead of v4 beta package and use Zod locales for error messages (CU-8697uqxnq9)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.15</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Maintenance

* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.8</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Maintenance

* upgrade to TypeScript 5.8 (CU-8697uqxnq)
* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Development dependency update @devowl-wp/regexp-translation-extractor 0.2.40</summary>


**_Purpose of dependency:_** _Provide a performant translation extractor based on regular expression._
##### Maintenance

* use PNPM catalog feature (CU-8699ec2dm)</details>

<details><summary>Development dependency update @devowl-wp/ts-config 0.1.16</summary>


**_Purpose of dependency:_** _Predefined compiler options for our backends._
##### Bug Fixes

* make the headless content url scanner work in ESM and CJS (CU-8696heugb)


##### Maintenance

* upgrade to TypeScript 5.8 (CU-8697uqxnq)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.44</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Maintenance

* upgrade to TypeScript 5.8 (CU-8697uqxnq)
* use PNPM catalog feature (CU-8699ec2dm)</details>





## 4.2.42 (2025-06-11)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.46</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* replace links with changed slugs (CU-86973be3f)</details>





## 4.2.41 (2025-05-15) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.5</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Build System

* add support for Cloudflare workers through wrangler CLI (CU-8698nqyb0)


##### Continuous Integration

* deploy Cloudflare workers in master and develop environment (CU-8698nqyb0)
* make Cloudflare worker builds available in review apps through own docker image packaged with Wrangler (CU-8698nqyb0)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.15</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Build System

* add support for Cloudflare workers through wrangler CLI (CU-8698nqyb0)</details>

<details><summary>Development dependency update @devowl-wp/ts-config 0.1.15</summary>


**_Purpose of dependency:_** _Predefined compiler options for our backends._
##### Build System

* add support for Cloudflare workers through wrangler CLI (CU-8698nqyb0)</details>





## 4.2.40 (2025-05-13) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.107</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Dependency updates @devowl-wp/react-folder-tree 0.1.14</summary>


**_Purpose of dependency:_** _Feature-rich folder tree renderer with toolbar (formerly react-aiot)._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Dependency updates @devowl-wp/react-utils 1.0.7</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.44</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.28</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.28</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/api 1.1.4</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/composer-licenses 0.1.18</summary>


**_Purpose of dependency:_** _Helper functionalities for your composer project to validate licenses and generate a disclaimer._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.4</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Code Refactoring

* move internal apps to our monorepo codebase and introduce swarm (CU-31mn75v)
* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.19</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.14</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.13</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Bug Fixes

* use first mounted container (CU-8694v2pwc)


##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.6</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/npm-licenses 0.1.14</summary>


**_Purpose of dependency:_** _Helper functionalities for your project to validate licenses and generate a disclaimer._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/phpcs-config 0.1.17</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPCS._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/regexp-translation-extractor 0.2.38</summary>


**_Purpose of dependency:_** _Provide a performant translation extractor based on regular expression._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/ts-config 0.1.14</summary>


**_Purpose of dependency:_** _Predefined compiler options for our backends._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.42</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Code Refactoring

* use lint-staged with correct monorepo support (CU-8699154vj)</details>





## 4.2.39 (2025-05-06)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/react-folder-tree 0.1.13</summary>


**_Purpose of dependency:_** _Feature-rich folder tree renderer with toolbar (formerly react-aiot)._
##### Bug Fixes

* touch devices are not working correctly (CU-8698ujw8f)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.27</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Bug Fixes

* optimize welcome page after installing a plugin (CU-8697rd0b8)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.27</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* fallback for anonymous_localize_script with random fallback key (CU-8697fw0r4)


##### Performance Improvements

* validate JSON before using JSON5 (CU-8698t43qg)</details>





## 4.2.38 (2025-04-25) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.3</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* connect to REVIEW_APP ssh agent (CU-8698fyv1c)
* connect to REVIEW_APP ssh agent (CU-8698fyv1c)
* use GIT_STRATEGY none to fetch the commit in review stop job (CU-8698fyv1c)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.13</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Bug Fixes

* quill editor and WYSIWYG editors are not rendered (CU-8698tv43q)</details>





## 4.2.37 (2025-04-17) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Maintenance

* update to Weblate 5.11 and use new automattic format (CU-31976hv)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.104</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Maintenance

* update to Weblate 5.11 and use new automattic format (CU-31976hv)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.41</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* update to Weblate 5.11 and use new automattic format (CU-31976hv)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.25</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* update to Weblate 5.11 and use new automattic format (CU-31976hv)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.25</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Maintenance

* update to Weblate 5.11 and use new automattic format (CU-31976hv)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.17</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* recreate FormData instance on every retry when uploading en file (CU-31976hv)
* weblate 5.11 is not immediatly returning task_url when creating a component (CU-31976hv)</details>





## 4.2.36 (2025-04-14)


### Bug Fixes

* compatibility with Admin Columns Pro bulk edit (CU-8698kvnta)


### Maintenance

* compatibility with WordPress 6.8 (CU-8698n6jp7)







## 4.2.35 (2025-04-08) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Maintenance

* migrate to docker swarm for multi-instance capability (CU-8697hja46)


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.2</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Maintenance

* create owlreview.de certificates instead of swarm.owlreview.de (CU-8697hja46)
* migrate to docker swarm for multi-instance capability (CU-8697hja46)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.4</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Maintenance

* migrate to docker swarm for multi-instance capability (CU-8697hja46)</details>





## 4.2.34 (2025-04-02) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.







## 4.2.33 (2025-03-27) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.


### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.101</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Dependency updates @devowl-wp/react-folder-tree 0.1.10</summary>


**_Purpose of dependency:_** _Feature-rich folder tree renderer with toolbar (formerly react-aiot)._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Dependency updates @devowl-wp/react-utils 1.0.4</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.38</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.22</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.22</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/api 1.1.1</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.1</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)


##### Continuous Integration

* create wildcard certificate for owlsrv.de (CU-8697hja46)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.15</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* retry up to 10 minutes when component is locked in weblate (CU-8695kguk7)


##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.12</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.10</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.3</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/regexp-translation-extractor 0.2.35</summary>


**_Purpose of dependency:_** _Provide a performant translation extractor based on regular expression._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/ts-config 0.1.13</summary>


**_Purpose of dependency:_** _Predefined compiler options for our backends._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.39</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Code Refactoring

* update ESLint to v9, organize imports, and refactor imports for ESM preparation (CU-8694tbwme)</details>





## 4.2.32 (2025-03-19) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/freemium 1.3.100</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Bug Fixes

* invalidate the database scheme when upgrading from free to PRO version (CU-8697zkqjj)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.21</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* invalidate the database scheme when upgrading from free to PRO version (CU-8697zkqjj)</details>





## 4.2.31 (2025-03-04) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/react-utils 1.0.3</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Bug Fixes

* show a notice when a template is machine translated (CU-8692xtha4)</details>

<details><summary>Development dependency update @devowl-wp/api 1.1.0</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* corrected calculation full machine translation and introduce flag ignoreOnMachineTranslation (CU-8692xtha4)
* enhance machine translation with granular translation options (CU-8692xtha4)
* introduce machine translation status (CU-8692xtha4)


##### Features

* introduce fully machine translated flag to translation status (CU-8692xtha4)
* introduce machine translation including relational metadata service WiP (CU-8692xtha4)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.7.0</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* build docker containers only after the install job (CU-8697hja46)
* generate production certificates for devowl.io and owlinfra.de (CU-8697hja46)
* generate production Lets Encrypt certificates instead of staging server (CU-8697hja46)


##### Features

* run develop pipeline which creates review app certificates on new branch (CU-8697hja46)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.11</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Maintenance

* implement transaction handling in email and storage operations, update ESLint rules for ORM CUD methods (CU-861mfub3j)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.38</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Build System

* exclude @antv/g2 resources from being inline required as it leads to issues when rendering charts (CU-8695xwj6u)</details>





## 4.2.30 (2025-02-25) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.6.8</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* create checksum over all certificates (CU-8697hja46)
* generate certificates for swarm revie apps (CU-8697hja46)
* generate regularily certificates with go-acme/lego for our CI runners (CU-8697hja46)
* generate regularily wildcard certificates with go-acme/lego for our CI runners (CU-8697hja46)
* remove orphan certificates (CU-8697hja46)
* use home-runner for WordPress.org push (CU-86980hdd8)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.1</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Continuous Integration

* generate certificates for swarm revie apps (CU-8697hja46)</details>





## 4.2.29 (2025-02-20) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.12</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Maintenance

* console log weblate error message (CU-8695kguk7)</details>





## 4.2.28 (2025-02-17) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/freemium 1.3.96</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Maintenance

* upgrade to PNPM 10 (CU-8697je0ta)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.17</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* upgrade to PNPM 10 (CU-8697je0ta)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.17</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Maintenance

* upgrade to PNPM 10 (CU-8697je0ta)</details>





## 4.2.27 (2025-02-06)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.32</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* typo</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.6.7</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Bug Fixes

* always validate docker images when built (CU-8696heugb)


##### Build System

* streamline docker and setup.sh into a Taskfile.setup.yml (CU-8696k3cct)


##### Continuous Integration

* always validate and try to fix docker images (CU-8697pj0tx)
* validate docker images with new CNCF scopes and socket hang up in Weblate translations (CU-8697pj0tx)


##### Tests

* make static files inclusive domain mapping available in playwright tests and create first test (CU-8695mtnyu)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.11</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* retry weblate request on socket hang up while uploading a file (CU-8695kguk7)


##### Continuous Integration

* validate docker images with new CNCF scopes and socket hang up in Weblate translations (CU-8697pj0tx)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.8.0</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Continuous Integration

* validate docker images with new CNCF scopes and socket hang up in Weblate translations (CU-8697pj0tx)


##### Features

* new command merge-request-tree (also as VSCode task) to visually show Merge Requests (CU-8692xtha4)</details>





## 4.2.26 (2025-01-14)


### Bug Fixes

* set default api documentation version to 1.0.0 to improve UX on api docs (CU-869727naj)


### Build System

* locally host iconfonts instead of using alicdn (CU-86979mp3p)


<details><summary>Dependency updates @devowl-wp/react-folder-tree 0.1.6</summary>


**_Purpose of dependency:_** _Feature-rich folder tree renderer with toolbar (formerly react-aiot)._
##### Build System

* locally host iconfonts instead of using alicdn (CU-86979mp3p)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.31</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* remove potential whitespaces on license keys to improve UX (CU-86974pd8z)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.10</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* ensure to retry on locked component after 2,5 minutes (CU-8695kguk7)</details>





## 4.2.25 (2024-12-06)


### Maintenance

* remove version from docker-compose files as this is no longer needed (CU-8696k3cct)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.93</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Performance Improvements

* allow profiling PHPUnit tests via webgrind (CU-8696qqa89)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.14</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Performance Improvements

* allow profiling PHPUnit tests via webgrind (CU-8696qqa89)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.14</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Build System

* cannot declare class InstalledVersions for composer (CU-8696ru88g)


##### Performance Improvements

* allow profiling PHPUnit tests via webgrind (CU-8696qqa89)</details>





## 4.2.24 (2024-11-07)


### Documentation

* update readme for wordpress.org (CU-869657pwb)


<details><summary>Dependency updates @devowl-wp/react-utils 1.0.0</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Maintenance

* initial release (CU-869656drt)


##### BREAKING CHANGES

* With Real Cookie Banner v5 we enter v1 of dependency packages.</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.13</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Performance Improvements

* too much memory consumed when downloading TCF GVL vendor list and services (CU-8696eq8k1)</details>

<details><summary>Development dependency update @devowl-wp/api 1.0.0</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Maintenance

* initial release (CU-869656drt)


##### BREAKING CHANGES

* With Real Cookie Banner v5 we enter v1 of dependency packages.</details>





## 4.2.23 (2024-10-23)


### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.91</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.28</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* do not invalidate license for elb.amazonaws.com (CU-86964ynay)


##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.12</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Bug Fixes

* uasort(): Argument [#1](https://git.owlinfra.de/devowlio/devowl-wp/issues/1) () must be of type array, null given in (CU-86967g2a2)


##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.12</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* content blocker cannot be saved with empty description text (CU-869625w64)


##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)</details>

<details><summary>Development dependency update @devowl-wp/api 0.5.27</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)</details>

<details><summary>Development dependency update @devowl-wp/composer-licenses 0.1.17</summary>


**_Purpose of dependency:_** _Helper functionalities for your composer project to validate licenses and generate a disclaimer._
##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.6.6</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)


##### Maintenance

* migrate away from envkey-source to infisical (CU-86959qnq2)


##### Tests

* port fast-html-tag and headless-content-blocker to TypeScript with Vitest tests (CU-8695mtnyu)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.9</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* make retry mechanism work with FormData (CU-8695kguk7)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.10</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Tests

* port fast-html-tag and headless-content-blocker to TypeScript with Vitest tests (CU-8695mtnyu)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.7.16</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Maintenance

* migrate away from envkey-source to infisical (CU-86959qnq2)</details>

<details><summary>Development dependency update @devowl-wp/phpcs-config 0.1.16</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPCS._
##### Code Refactoring

* remove jest and phpunit from packages which do not use it (CU-8695mtnyu)</details>





## 4.2.22 (2024-09-26)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.27</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* do not invalidate license for azurewebsites.net (CU-8695h2x87)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.11</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Maintenance

* remove referer workaround for Strato servers (CU-86954236z)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.6.5</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Bug Fixes

* provide APP_NAME and APP_VERSION in backend environment (CU-8695emete)
* restore production database dump app-versionized (CU-8695emete)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.8</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* retry 5 times when component is locked (CU-8695kguk7)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.5</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Continuous Integration

* make public changelog generation work again with latest Taskfile version (CU-8695kgrpr)


##### Maintenance

* update retypeapp (CU-8695kgrpr)</details>





## 4.2.21 (2024-08-28) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/react-utils 0.1.7</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Code Refactoring

* performance tuning and shouldUpdate tweaks (CU-861n9jg7k)</details>

<details><summary>Development dependency update @devowl-wp/api 0.5.25</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* apply new eslint rules (CU-861n9jg7k)
* introduce translation flag statistics and entity display (CU-861n9jg7k)
* introduce translation flags for translatable strings (CU-8693travj)


##### Code Refactoring

* reordering vars (CU-861n9jg7k)</details>





## 4.2.20 (2024-08-08)


### Code Refactoring

* remove no longer needed functions (CU-86959qqq1)


<details><summary>Dependency updates @devowl-wp/utils 1.19.9</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* some components are not rendered in WordPress < 6.2 (CU-86959qqq1)
* use ReactJSXRuntime for better WordPress 6.6 compatibility (CU-86959qqq1)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.33</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Bug Fixes

* some components are not rendered in WordPress < 6.2 (CU-86959qqq1)
* use ReactJSXRuntime for better WordPress 6.6 compatibility (CU-86959qqq1)</details>





## 4.2.19 (2024-08-01)


### Code Refactoring

* move react-aiot to @devowl-wp/react-folder-tree within monorepo (CU-awv3bv)
* upgrade to React v18 (createRoot, unmountComponentAtNode, CU-awv3bv)


### Maintenance

* **deps :** update dependency php-stubs/wordpress-stubs to v6.6.0
* minimum required version is WordPress 5.9 (CU-awv3bv)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.87</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Maintenance

* **deps :** update dependency php-stubs/wordpress-stubs to v6.6.0</details>

<details><summary>Dependency updates @devowl-wp/react-folder-tree 0.1.1</summary>


**_Purpose of dependency:_** _Feature-rich folder tree renderer with toolbar (formerly react-aiot)._
##### Code Refactoring

* move react-aiot to @devowl-wp/react-folder-tree within monorepo (CU-awv3bv)
* upgrade to React v18 (createRoot, unmountComponentAtNode, CU-awv3bv)</details>

<details><summary>Dependency updates @devowl-wp/react-utils 0.1.6</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Code Refactoring

* upgrade to React v18 (createRoot, unmountComponentAtNode, CU-awv3bv)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.24</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Code Refactoring

* upgrade to React v18 (createRoot, unmountComponentAtNode, CU-awv3bv)


##### Maintenance

* **deps :** update dependency php-stubs/wordpress-stubs to v6.6.0</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.8</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* **deps :** update dependency php-stubs/wordpress-stubs to v6.6.0</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.8</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Build System

* generate cachebuster files in a real temporary file to avoid race conditions


##### Code Refactoring

* upgrade to React v18 (createRoot, unmountComponentAtNode, CU-awv3bv)


##### Maintenance

* **deps :** update dependency php-stubs/wordpress-stubs to v6.6.0</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.32</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Code Refactoring

* move react-aiot to @devowl-wp/react-folder-tree within monorepo (CU-awv3bv)</details>





## 4.2.18 (2024-07-17)


### Bug Fixes

* no longer send referer via URL parameter as this lead to issues with Strato servers (dashboard no longer loads, CU-86954236z)


<details><summary>Dependency updates @devowl-wp/utils 1.19.7</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* no longer send referer via URL parameter as this lead to issues with Strato servers (dashboard no longer loads, CU-86954236z)</details>





## 4.2.17 (2024-07-16)


### Documentation

* update README.md for WordPress 6.6 compatibility (CU-86951232r)


<details><summary>Development dependency update @devowl-wp/api 0.5.24</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Maintenance

* suppress logs from requests from nullers (CU-8694xa392)</details>





## 4.2.16 (2024-06-20)


### Build System

* remove babel-loader and babel toolchain and introduce SWC (CU-8694pt2j7)


### Continuous Integration

* introduce Renovate bot for dependency update automation (CU-8694qg0t9)


### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* **deps :** update dependency mpratt/embera to v2.0.40
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.84</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Build System

* remove babel-loader and babel toolchain and introduce SWC (CU-8694pt2j7)


##### Continuous Integration

* introduce Renovate bot for dependency update automation (CU-8694qg0t9)


##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* **deps :** update dependency mpratt/embera to v2.0.40
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* **deps :** update npm all dependencies inclusive some major updates (CU-8694qg0t9)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Dependency updates @devowl-wp/react-utils 0.1.4</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Maintenance

* **deps :** pin dependencies
* **deps :** update npm all dependencies (non-major)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.21</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* do not deactivate the license when the hostname differs in letter case (CU-8694uw4y2)


##### Build System

* remove babel-loader and babel toolchain and introduce SWC (CU-8694pt2j7)


##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* **deps :** update dependency mpratt/embera to v2.0.40
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.5</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Build System

* remove babel-loader and babel toolchain and introduce SWC (CU-8694pt2j7)


##### Continuous Integration

* introduce Renovate bot for dependency update automation (CU-8694qg0t9)


##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* **deps :** update dependency mpratt/embera to v2.0.40
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.5</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* remove notice about too many requests to devowl.io servers (CU-8694uj43d)


##### Build System

* remove babel-loader and babel toolchain and introduce SWC (CU-8694pt2j7)


##### Continuous Integration

* introduce Renovate bot for dependency update automation (CU-8694qg0t9)


##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* **deps :** update dependency mpratt/embera to v2.0.40
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* **deps :** update npm all dependencies inclusive some major updates (CU-8694qg0t9)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/api 0.5.23</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Build System

* remove babel-loader and babel toolchain and introduce SWC (CU-8694pt2j7)


##### Maintenance

* **deps :** pin dependencies
* **deps :** update npm all dependencies (non-major)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/composer-licenses 0.1.16</summary>


**_Purpose of dependency:_** _Helper functionalities for your composer project to validate licenses and generate a disclaimer._
##### Maintenance

* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.6.4</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* introduce Renovate bot for dependency update automation (CU-8694qg0t9)


##### Maintenance

* **deps :** pin dependencies
* **deps :** update npm all dependencies (non-major)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.7</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update npm all dependencies (non-major)
* **deps :** update npm all dependencies inclusive some major updates (CU-8694qg0t9)
* update commander and adm-zip (CU-8694qg0t9)
* update some major dependencies (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.8</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Maintenance

* **deps :** pin dependencies
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.4</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Continuous Integration

* remove npm-update-checker CLI command as we use Renovate now (CU-8694qg0t9)


##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update npm all dependencies (non-major)
* update commander and adm-zip (CU-8694qg0t9)
* update some major dependencies (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.7.14</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Continuous Integration

* introduce Renovate bot for dependency update automation (CU-8694qg0t9)


##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update npm all dependencies (non-major)
* update commander and adm-zip (CU-8694qg0t9)
* update some major dependencies (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/phpcs-config 0.1.15</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPCS._
##### Maintenance

* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/phpunit-config 0.1.14</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPUnit._
##### Maintenance

* **deps :** pin dependencies
* **deps :** update composer dependencies (non-major)
* update renovate.json (CU-8694qg0t9)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/regexp-translation-extractor 0.2.29</summary>


**_Purpose of dependency:_** _Provide a performant translation extractor based on regular expression._
##### Maintenance

* **deps :** pin dependencies
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.31</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Build System

* remove babel-loader and babel toolchain and introduce SWC (CU-8694pt2j7)


##### Maintenance

* **deps :** pin dependencies
* **deps :** pin dependencies
* **deps :** update npm (non-major)
* **deps :** update npm (non-major)
* **deps :** update npm all dependencies (non-major)
* upgrade prettier v3 together with eslint flat config and run on all files (fix, format, CU-8694qg0t9)</details>





## 4.2.15 (2024-05-29) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.







## 4.2.14 (2024-05-10)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.19</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* delete checkboxes for privacy policy and only print an information for this (CU-861mrzwar)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.3</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Bug Fixes

* delete checkboxes for privacy policy and only print an information for this (CU-861mrzwar)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.3</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* do not show admin notice about REST API issues in update admin screen (CU-8694hc398)
* too many requests to license.devowl.io announcements endpoint (CU-86939q6ce)</details>





## 4.2.13 (2024-04-25) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 0.5.21</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Bug Fixes

* introducing password login in rcb (CU-86936my3v)


##### Refactoring

* introduce user base interfaces (CU-86936my3v)</details>





## 4.2.12 (2024-04-10) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/utils 1.19.1</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Maintenance

* update stubs (CU-86949561p)</details>





## 4.2.11 (2024-04-09)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.16</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* deactivate license domain detection when running WordPress through WP CLI (CU-869482eaf)


##### Build Process

* remove minimal translations el fi and fix localization system (CU-861myr2cq)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.13.0</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Build Process

* remove minimal translations el fi and fix localization system (CU-861myr2cq)


##### Features

* translations into Hungarian, Romanian, Greek, Finnish and Slovak (CU-863gr8e97)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.19.0</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* compatibility with Perfmatters DelayJS functionality and Code on page load scripts (CU-869465a82)
* implement a mechanism detecting a defect Consent REST API and recommend knowledgebase articles (CU-8693zknc0)
* use vigenere cipher for obfuscating the REST API URL (CU-8693zknc0)


##### Build Process

* remove minimal translations el fi and fix localization system (CU-861myr2cq)


##### Features

* translations into Hungarian, Romanian, Greek, Finnish and Slovak (CU-863gr8e97)</details>

<details><summary>Development dependency update @devowl-wp/phpunit-config 0.1.13</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPUnit._
##### Bug Fixes

* scanner finds Google Maps for MyListing theme when Mapbox instead of Google Maps is used (CU-86947zz6j)</details>





## 4.2.10 (2024-03-22)


### Bug Fixes

* compatibility with WordPress 6.5 (CU-869434yv9)


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.15</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* avoid race conditions when contacting our backend servers to avoid triggering rate limit notice (CU-86939q6ce)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.18.3</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* avoid race conditions when contacting our backend servers to avoid triggering rate limit notice (CU-86939q6ce)</details>





## 4.2.9 (2024-03-04) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.29</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Bug Fixes

* do not index admin UI in search engines (CU-8693yzxhv)</details>





## 4.2.8 (2024-02-26)


### Refactoring

* move all util functions to @devowl-wp/react-utils (CU-8693cqz75)


<details><summary>Dependency updates @devowl-wp/react-utils 0.1.2</summary>


**_Purpose of dependency:_** _Provide various React utils, side effect free and tree shakeable._
##### Bug Fixes

* cookie banner cannot be accepted on old Safari browsers (CU-8693u1wzm)


##### Performance

* do no longer use webpackMode eager in favor of inline-require (CU-8693n1cc5)
* improve performance by not removing cookie banner from DOM after accepting for better INP in Google PageSpeed (CU-8693n1cc5)
* improve performance of applying consent and unblocking consent for better INP in Google PageSpeed (CU-8693n1cc5)
* improve Total Blocking Time in Page Speed Insights by yielding the main thread for TCF cookie banner (CU-8693n1cc5)
* lazy load data for the second layer / view of the cookie banner (CU-8693n1cc5)
* render shortcodes async and add lazy-require() webpack plugin (CU-8693cqz75)


##### Refactoring

* move all util functions to @devowl-wp/react-utils (CU-8693cqz75)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.13</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* client property value is empty error message when using serialized siteurl option (CU-8693uhwd7)


##### Refactoring

* move all util functions to @devowl-wp/react-utils (CU-8693cqz75)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.18.1</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Continuous Integration

* readme-to-json parser did no longer work due to missing taxonomy_exists function (CU-8693wju7t)


##### Performance

* allow to parse big objects localized via wp_localize_script lazily (CU-8693n1cc5)
* do no longer use webpackMode eager in favor of inline-require (CU-8693n1cc5)
* use code splitting for the cookie banner and content blocker to reduce initial download time (CU-8693ubj9a)


##### Refactoring

* move all util functions to @devowl-wp/react-utils (CU-8693cqz75)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.6.2</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Performance

* improve performance by not removing cookie banner from DOM after accepting for better INP in Google PageSpeed (CU-8693n1cc5)


##### Refactoring

* move all consent relevant structures and procedures to @devowl-wp/cookie-consent-management (CU-8693n1cc5)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.7</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Performance

* improve Total Blocking Time in Page Speed Insights by yielding the main thread for TCF cookie banner (CU-8693n1cc5)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.28</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Performance

* improve Total Blocking Time in Page Speed Insights by inlining require statements (CU-8693n1cc5)</details>





## 4.2.7 (2024-02-05)


### Refactoring

* introduce @devowl-wp/react-utils package (CU-8693nj8v6)


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.12</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* use non-docker URL with HTTPS in development environment to not bypass Traefik (CU-86939q6ce)


##### Performance

* save one SQL SELECT query in WordPress admin dashboard (CU-86939q6ce)


##### Refactoring

* move some util methods to @devowl-wp/utils (CU-86939q6ce)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.18.0</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Features

* introduce a new notice when a rate limited request was done to devowl.io backend services (CU-86939q6ce)


##### Maintenance

* use non-docker URL with HTTPS in development environment to not bypass Traefik (CU-86939q6ce)


##### Performance

* save one SQL SELECT query in WordPress admin dashboard (CU-86939q6ce)


##### Refactoring

* move some util methods to @devowl-wp/utils (CU-86939q6ce)</details>





## 4.2.6 (2024-01-25)


### Maintenance

* update to antd@5 (CU-863gku332)


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.11</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* allow to copy client UUID by hovering the installation type icon (CU-8693hv7vb)
* show a notice for successor templates which replace other templates (CU-869372jf7)


##### Maintenance

* update to antd@5 (CU-863gku332)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.17.9</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* php error automatic conversion of false to array is deprecated (CU-apv5uu)
* show a notice for successor templates which replace other templates (CU-869372jf7)
* sometimes the WordPress REST API is contacted infinite when WP heartbeat is deactivated and login no longer valid (CU-8693jq17r)


##### Maintenance

* update to antd@5 (CU-863gku332)


##### Performance

* reduce bundle size by replacing sha-1 by a simple hash function (CU-apv5uu)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.6</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Maintenance

* update to antd@5 (CU-863gku332)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.7.11</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Continuous Integration

* use project ID to read associated merge request for pipeline (CU-apv5uu)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.27</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Maintenance

* update to antd@5 (CU-863gku332)</details>





## 4.2.5 (2024-01-18) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.6.0</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Bug Fixes

* output ci summary for review application URLs for traefik v2 (CU-2rjtd0)


##### Continuous Integration

* automatically retry to fetch the git repository three times when there is a temporary error (CU-8693j5ngt)
* deploy backends in production to docker-host-6.owlsrv.de (CU-2rjtd0)


##### Features

* introduce public-changelogs command (CU-2mjxz4x)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.2.0</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Features

* introduce public-changelogs command (CU-2mjxz4x)</details>





## 4.2.4 (2024-01-04)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/utils 1.17.7</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Build Process

* correctly autoload composer package files autoload.files per plugin (CU-8693dhuhv)</details>





## 4.2.3 (2023-12-21)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Dependency updates @devowl-wp/utils 1.17.6</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* fatal error after latest update as WordPress stubs were no longer compatible with WordPress < 6.2 (CU-8693cg7cp)</details>





## 4.2.2 (2023-12-21)


### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.70</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Bug Fixes

* cannot access the settings page when switching from free to PRO version (CU-8693ccu6u)


##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.7</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.12.7</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.17.5</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Development dependency update @devowl-wp/composer-licenses 0.1.15</summary>


**_Purpose of dependency:_** _Helper functionalities for your composer project to validate licenses and generate a disclaimer._
##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.5.1</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Bug Fixes

* correctly check for the SHA of the latest master branch (CU-8693bzjkb)


##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.5</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Development dependency update @devowl-wp/phpcs-config 0.1.14</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPCS._
##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Development dependency update @devowl-wp/phpunit-config 0.1.12</summary>


**_Purpose of dependency:_** _Predefined functionalities for PHPUnit._
##### Maintenance

* upgrade to PHP 8.2 including composer packages (CU-arua06)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.25</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Bug Fixes

* use correct name for long term caching for extracted CSS files (CU-8693bc0d2)</details>





## 4.2.1 (2023-12-19) (not released)

**Note:** This version of the package has not (yet) been released publicly. This happens if changes have been made in dependencies that do not affect this package (e.g. changes for the development of the package). The changes will be rolled out with the next official update.

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.5.0</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* rotate transaction_ids_by_target_id every 14 days (CU-86937dv6w)
* upload did not work with newer Debian version, disable StrictHostKeyChecking for lftp upload (CU-86937dw3d)


##### Features

* allow to skip publish of packages by regular expression in merge request description with target branch master (CU-8693bzjkb)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.1</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* copy files always once and overwrite existing files (CU-8693bq3nh)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.1.13</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Bug Fixes

* show skipped publish packages as those in the generated CHANGELOG.md files (CU-8693bzjkb)</details>





# 4.2.0 (2023-12-15)


### Features

* translations into Norwegian Bokmål (CU-86938vncv)


### Refactoring

* use a class instead of an object for continuous localization settings (CU-86938ba8a)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.68</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Refactoring

* use a class instead of an object for continuous localization settings (CU-86938ba8a)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.5</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Refactoring

* use a class instead of an object for continuous localization settings (CU-86938ba8a)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.12.5</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Refactoring

* use a class instead of an object for continuous localization settings (CU-86938ba8a)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.17.3</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* allow to configure capabilities via Activator#registerCapabilities (CU-86938n5gk)
* compatibility with Cloudflare Rocket Loader (CU-86938z54n)


##### Refactoring

* use a class instead of an object for continuous localization settings (CU-86938ba8a)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.8.0</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* allow to configure branch settings via root package.json instead of hardcoded (CU-86938ba8a)
* respect branch settings in weblate-prune-deleted-branches CLI command (CU-86938ba8a)
* show a hint when a language is in Weblate but not configured in package.json in weblate-status command (CU-86938ba8a)


##### Build Process

* do not expose de@formal and nl@formal to Weblate (CU-86938ba8a)


##### Features

* allow to exclude locales from projects with overrides.excludeLocales in package.json settings (CU-86938ba8a)


##### Refactoring

* use a class instead of an object for continuous localization settings (CU-86938ba8a)</details>





## 4.1.79 (2023-11-28)


### Bug Fixes

* respect RCL/Sorting also in UI (CU-8693724z9)


### Refactoring

* remove all cypress dependencies and tests (CU-8692yek74)


### Testing

* migrate E2E tests to playwright (CU-8692yek74)


<details><summary>Dependency updates @devowl-wp/utils 1.17.2</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Refactoring

* remove all cypress dependencies and tests (CU-8692yek74)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.4.5</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Refactoring

* remove all cypress dependencies and tests (CU-8692yek74)


##### Testing

* introduce @devowl-wp/playwright-utils with smoke test functionality (CU-8692yek74)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.4</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Refactoring

* remove all cypress dependencies and tests (CU-8692yek74)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.7.9</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Bug Fixes

* update Gitlab YAML typings (CU-8692yek74)</details>





## 4.1.78 (2023-11-24)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/continuous-integration 0.4.4</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Continuous Integration

* show inconsistent translations always in translation status (CU-86932cagc)
* validate production docker compose config on compose YAML changes (CU-86934wg6z)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.7.9</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* do find propagated string translations from other components when merging a branch to another (CU-86932nwn8)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.7.8</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Bug Fixes

* also delete skipped pipelines and pipelines of deleted branches</details>





## 4.1.77 (2023-11-22)


### Bug Fixes

* compatibility with Envira tags addon and PHP 8.2 (CU-86935xe5n)


<details><summary>Dependency updates @devowl-wp/utils 1.17.0</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Features

* introduce batch requests (CU-86930ub71)
* introduce TCF 2.2 / GVL v3 compatibility (CU-863gt04va)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.7.8</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* machine translate all unfinished strings as changed strings are not detected with nottranslated (CU-86932nwn8)</details>





## 4.1.76 (2023-11-16)


### Maintenance

* fix non-ASCII characters in POT msg strings (CU-86932nwn8)


<details><summary>Dependency updates @devowl-wp/real-utils 1.12.1</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* fix non-ASCII characters in POT msg strings (CU-86932nwn8)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.16.1</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* compatibility with WP Meteor optimization plugin (CU-86933j1zb)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.7.7</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Bug Fixes

* always use auto_source=others in Weblate autotranslate to avoid picking inconsistent strings across projects (CU-86932nwn8)
* do not fuzzy autotranslate machine translated strings (CU-86932nwn8)
* use auto translate others instead of download and upload ZIP when creating feature branch in Weblate (CU-86932nwn8)


##### Reverts

* back to ZIP download/upload as it is faster than autotranslate with others (CU-86932nwn8)</details>





## 4.1.75 (2023-11-07)


### Build Process

* set @automattic/interpolate-components as enforced check in weblate (CU-2gfb4w6)
* set php-format as enforced check in weblate (CU-2gfb4w6)


### Maintenance

* add de@informal with threshold 100 in continuous localization (CU-2gfb42y)
* minimum required PHP version 7.4 and WP version 5.8 (CU-arvdr3)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.63</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Build Process

* set @automattic/interpolate-components as enforced check in weblate (CU-2gfb4w6)
* set php-format as enforced check in weblate (CU-2gfb4w6)


##### Maintenance

* add de@informal with threshold 100 in continuous localization (CU-2gfb42y)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.19.0</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* remote language codes for cs, da and sv (CU-2gfb42y)


##### Build Process

* set @automattic/interpolate-components as enforced check in weblate (CU-2gfb4w6)
* set php-format as enforced check in weblate (CU-2gfb4w6)


##### Continuous Integration

* enable machine translation for various languages (CU-2gfb42y)
* translation completeness thresholds defined for main languages (CU-861n4aer5)


##### Features

* translations in Spanish, French, Italian, Dutch, Polish, Danish, Swedish, Norwegian, Czech, Portuguese and Romanian (CU-2gfb42y)
* translations in Spanish, French, Italian, Dutch, Polish, Danish, Swedish, Norwegian, Czech, Portuguese and Romanian (CU-2gfb42y)


##### Maintenance

* add legal-text to some texts (CU-2gfb42y)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.12.0</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Bug Fixes

* remote language codes for cs, da and sv (CU-2gfb42y)


##### Build Process

* set @automattic/interpolate-components as enforced check in weblate (CU-2gfb4w6)
* set php-format as enforced check in weblate (CU-2gfb4w6)


##### Continuous Integration

* enable machine translation for various languages (CU-2gfb42y)
* translation completeness thresholds defined for main languages (CU-861n4aer5)


##### Features

* translations in Spanish, French, Italian, Dutch, Polish, Danish, Swedish, Norwegian, Czech, Portuguese and Romanian (CU-2gfb42y)
* translations in Spanish, French, Italian, Dutch, Polish, Danish, Swedish, Norwegian, Czech, Portuguese and Romanian (CU-2gfb42y)


##### Maintenance

* add legal-text to some texts (CU-2gfb42y)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.16.0</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* remote language codes for cs, da and sv (CU-2gfb42y)


##### Build Process

* remove local language files from built ZIP file and use remote files (CU-861n4ahzb)
* set @automattic/interpolate-components as enforced check in weblate (CU-2gfb4w6)
* set php-format as enforced check in weblate (CU-2gfb4w6)


##### Continuous Integration

* enable machine translation for various languages (CU-2gfb42y)
* translation completeness thresholds defined for main languages (CU-861n4aer5)


##### Features

* translations in Spanish, French, Italian, Dutch, Polish, Danish, Swedish, Norwegian, Czech, Portuguese and Romanian (CU-2gfb42y)
* translations in Spanish, French, Italian, Dutch, Polish, Danish, Swedish, Norwegian, Czech, Portuguese and Romanian (CU-2gfb42y)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.7.6</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Continuous Integration

* show inconsistent translations always in translation status (CU-86932cagc)


##### Maintenance

* machine translated strings should be trusted and not set as fuzzy in Weblate (CU-2gfb42y)</details>





## 4.1.74 (2023-11-02)


### Maintenance

* tested up to WordPress 6.4 (CU-8692zwmth)


<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.18.3</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Bug Fixes

* passing null to parameter [#1](https://git.devowl.io/devowlio/devowl-wp/issues/1) () of type string is deprecated</details>





## 4.1.73 (2023-10-27)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.


<details><summary>Development dependency update @devowl-wp/api 0.5.13</summary>


**_Purpose of dependency:_** _Shared typings for all Node.js backends and frontends._
##### Documentation

* update JSDoc, make some methods private and extend some typings (CU-866avtm7z)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.7.7</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Continuous Integration

* purge master pipelines after 90 days instead of 360</details>





## 4.1.72 (2023-10-12)


### Bug Fixes

* compatibility with PolyLang/WPML showing all categories of all languages in category tree (CU-8692wt90v)


### Build Process

* composer.lock had same content-hash accross some projects (CU-866aybq9e)


### Maintenance

* major update apidoc (CU-3cj43t)
* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* major update webpack components (CU-3cj43t)


<details><summary>Dependency updates @devowl-wp/freemium 1.3.61</summary>


**_Purpose of dependency:_** _Make your plugin to a freemium plugin with predefined Envato support_
##### Maintenance

* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* major update webpack components (CU-3cj43t)</details>

<details><summary>Dependency updates @devowl-wp/real-product-manager-wp-client 1.18.1</summary>


**_Purpose of dependency:_** _A WordPress client for Real Product Manager_
##### Maintenance

* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* major update webpack components (CU-3cj43t)
* prepare upgrade wizard for v4 release (CU-861n7amqx)</details>

<details><summary>Dependency updates @devowl-wp/real-utils 1.11.13</summary>


**_Purpose of dependency:_** _Create cross-selling ads, about page, rating and newsletter input for WP Real plugins._
##### Maintenance

* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* major update webpack components (CU-3cj43t)</details>

<details><summary>Dependency updates @devowl-wp/utils 1.15.13</summary>


**_Purpose of dependency:_** _Utility functionality for all your WordPress plugins._
##### Bug Fixes

* compatibility with latest Swift Performance version (CU-866aybgxm)


##### Maintenance

* drop concurrently package as no longer needed (CU-3cj43t)
* major update apidoc (CU-3cj43t)
* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update tsc-watch immer lint-staged sort-package-json (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* major update webpack components (CU-3cj43t)
* remove supports-color, update focusable-selectors react-quill react-codemirror2 js-cookie (CU-3cj43t)
* update Lerna v7 (CU-31956up)</details>

<details><summary>Development dependency update @devowl-wp/continuous-integration 0.4.2</summary>


**_Purpose of dependency:_** _DevOps macros, job templates and jobs for Gitlab CI and @devowl-wp/node-gitlab-ci._
##### Maintenance

* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* update Lerna v7 (CU-31956up)</details>

<details><summary>Development dependency update @devowl-wp/continuous-localization 0.7.4</summary>


**_Purpose of dependency:_** _Provide a CLI to push and pull localization files from different translation management systems._
##### Maintenance

* major update commander (CU-3cj43t)
* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)</details>

<details><summary>Development dependency update @devowl-wp/eslint-config 0.2.3</summary>


**_Purpose of dependency:_** _Provide eslint configuration for our complete monorepo._
##### Maintenance

* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)</details>

<details><summary>Development dependency update @devowl-wp/monorepo-utils 0.1.9</summary>


**_Purpose of dependency:_** _Predefined monorepo utilities and tasks._
##### Continuous Integration

* include changelogs from dependencies (CU-2k54tcb)


##### Maintenance

* major update commander (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* update Lerna v7 (CU-31956up)</details>

<details><summary>Development dependency update @devowl-wp/node-gitlab-ci 0.7.6</summary>


**_Purpose of dependency:_** _Create dynamic GitLab CI pipelines in JavaScript or TypeScript for each project. Reuse and inherit instructions and avoid duplicate code!_
##### Maintenance

* major update commander (CU-3cj43t)
* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)</details>

<details><summary>Development dependency update @devowl-wp/regexp-translation-extractor 0.2.19</summary>


**_Purpose of dependency:_** _Provide a performant translation extractor based on regular expression._
##### Maintenance

* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)</details>

<details><summary>Development dependency update @devowl-wp/webpack-config 0.2.20</summary>


**_Purpose of dependency:_** _Webpack config builder for multiple ecosystems like standalone React frontends, Antd, Preact and WordPress._
##### Maintenance

* major update jest-junit glob @types/jest jest ts-jest (CU-3cj43t)
* major update tsc-watch immer lint-staged sort-package-json (CU-3cj43t)
* major update typescript [@typescript-eslint](https://git.devowl.io/typescript-eslint) typedoc (CU-3cj43t)
* major update webpack components (CU-3cj43t)</details>





## 4.1.71 (2023-09-29)


### chore

* review 1 (CU-85ztzbdjt)


### docs

* remove not understandable commit messages from changelog (CU-861n7an31)





## 4.1.70 (2023-09-21)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.69 (2023-09-07)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.68 (2023-09-06)


### chore

* introduce empty i18n:generate:readme NPM script (CU-861n8mnx8)





## 4.1.67 (2023-08-28)


### build

* use @babel/plugin-proposal-class-properties with updated caniuse-lite database (CU-863h37kvr)





## 4.1.66 (2023-08-24)


### refactor

* introduce class names and a scoped stylesheet to Cookie Banner instead of style attribute (CU-2yt81xz)





## 4.1.65 (2023-08-04)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.64 (2023-08-04)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.63 (2023-08-04)


### fix

* language packs could not be downloaded from SVN repository for slugs ending with -lite (CU-861n4ahzb)





## 4.1.62 (2023-08-02)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.61 (2023-08-02)


### chore

* checked compatibility with WordPress 6.3 (CU-861n42pdy)
* review 1 (CU-861n4ahzb)





## 4.1.60 (2023-07-18)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.59 (2023-07-06)


### refactor

* introduce custom ESLint rules ability in @devowl-wp/eslint-config (CU-863gxjbn4)





## 4.1.58 (2023-06-05)


### ci

* technical renaming of German, French, Spanish, Italian and Dutch translations that they contains the formality (CU-2gfb42y)


### fix

* mapping of language files for copying to correct language (CU-2gfb42y)





## 4.1.57 (2023-05-30)


### fix

* use correct charset and collate in database for newly added database tables (CU-863gtqpz0)





## 4.1.56 (2023-05-22)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.55 (2023-05-21)


### chore

* remove dotenv package (CU-861m6e3mz)


### refactor

* migrate Traefik environment variables to Envkey (CU-861m6e3mz)





## 4.1.54 (2023-05-19)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.53 (2023-05-12)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.52 (2023-05-11)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.51 (2023-04-28)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.50 (2023-04-24)


### chore

* update sass-loader (CU-1m75tnw)





## 4.1.49 (2023-04-19)


### chore

* remove non-ASCII characters from POT files (CU-863gffr77)


### fix

* compatibility with Elementor templates and the toolbar is overlapped by sidebar (CU-863gfdkwy)
* inputs are no longer clickable in list table instead drag handler is started (CU-863gfdk0a)


### refactor

* introduce taskfile.dev Taskfiles (CU-85zrrymj0)





## 4.1.48 (2023-03-24)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.47 (2023-03-21)


### chore

* update dependencies including TypeScript 4.9, antd and eslint (CU-85zrqk9pd)


### refactor

* rename grunt-continuous-localization to continuous-localization and remove grunt dependency (pure bin, CU-85zrrytg6)





## 4.1.46 (2023-03-14)


### chore

* compatibility with WordPress 6.2 (CU-861mfxmc1)
* remove unused dependencies (CU-85zrqj4jp)
* restructure .env and replace Scaleway API keys with new IAM (CU-37q5f2x)


### ci

* remove license.matthias-web.com deployments (CU-2tynfe0)


### fix

* compatibility with WPCode code snippets plugin (CU-861mf1ahj)





## 4.1.45 (2023-03-01)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.44 (2023-02-28)


### chore

* update wordpress stubs (CU-863g4efkw)


### fix

* invalid JSON int database helper class with the help of JSON5 (CU-863g4efkw)





## 4.1.43 (2023-02-21)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.42 (2023-02-15)


### chore

* streamline docker-compose settings with non-production context (CU-861m5btfw)





## 4.1.41 (2023-01-25)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.40 (2023-01-10)


### fix

* do not always consider product_cat as WooCommerce taxonomy when it is not active (CU-860pg59mb)





## 4.1.39 (2022-12-22)


### chore

* link to kb article for development license warnings / red warnings (CU-388ch1x)
* update all package.json to resolve release conflicts (CU-382p4kb)


### perf

* remove path_join calls and use trailingslashit instead (CU-861m3qqb7)





## 4.1.38 (2022-12-12)


### docs

* update README contributors





## 4.1.37 (2022-12-02)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.36 (2022-12-01)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.35 (2022-11-18)


### refactor

* rename handleCorruptRestApi function (CU-33tce0y)





## 4.1.34 (2022-11-15)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.33 (2022-11-09)


### refactor

* static trait access (Assets handles, CU-1y7vqm6)
* static trait access (Assets types, CU-1y7vqm6)
* static trait access (Localization i18n public folder, CU-1y7vqm6)
* static trait access (Localization, CU-1y7vqm6)





## 4.1.32 (2022-10-31)


### chore

* compatibility with WordPress 6.1 (CU-32bjn2k)


### fix

* link to All posts were not clickable (CU-32bjn2k)





## 4.1.31 (2022-10-25)


### chore

* migrate to self hosted Gitlab instance (CU-2yt2948)
* remove es6 and es7 shims as they are no longer needed (CU-31zz91r)





## 4.1.30 (2022-10-11)


### build

* add webpack as dependency to make it compatible with PNPM (CU-3rmk7b)


### chore

* add new team member to wordpress.org plugin description (CU-2znqfnu)
* introduce consistent type checking for all TypeScript files (CU-2eap113)
* prepare script management for self-hosted Gitlab migrations (CU-2yt2948)
* start introducing common webpack config for frontends (CU-2eap113)
* switch from yarn to pnpm (CU-3rmk7b)


### test

* setup VNC with noVNC to easily create Cypress tests (CU-306z401)





## 4.1.29 (2022-09-21)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.28 (2022-09-21)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.27 (2022-09-20)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.26 (2022-09-16)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.25 (2022-09-06)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.24 (2022-08-29)


### chore

* introduce devowl-scripts binary (CU-2n41u7h)
* introduce for non-flat node_modules development experience (CU-2n41u7h)
* prepare packages for PNPM isolated module mode (CU-2n41u7h)
* rebase conflicts (CU-2n41u7h)


### perf

* drop IE support completely (CU-f72yna)
* permit process.env destructuring to save kb in bundle size (CU-f72yna)


### refactor

* use browsers URL implementation instead of url-parse (CU-f72yna)





## 4.1.23 (2022-08-09)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.22 (2022-07-06)


### fix

* allow to enable page categories column in screen settings (CU-2md9xgf)





## 4.1.21 (2022-06-13)


### chore

* remove unnecessery update client third-party scripts in free version (CU-2kat97y)
* update README.txt title and remove WordPress wording (CU-2kat97y)





## 4.1.20 (2022-06-08)


### chore

* minimum required PHP version is now PHP 7.2 (CU-2eanvmc)
* update changelog URL (CU-2adgjqp)


### docs

* compatibility with WordPress 6.0 (CU-2e4yvvt)





## 4.1.19 (2022-05-13)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.18 (2022-05-09)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.17 (2022-04-29)


### chore

* update changelog URL (CU-2chdb51)


### docs

* new contributors for WordPress plugins





## 4.1.16 (2022-04-20)


### chore

* code refactoring and calculate monorepo package folders where possible (CU-2386z38)
* remove React and React DOM local copies and rely on WordPress version (CU-awv3bv)


### fix

* compatibility with Rank Math SEO Pro and bulk editing (CU-23z1qkq)


### refactor

* extract composer dev dependencies to their corresponding dev package (CU-22h231w)
* name traefik environment to staging (CU-22h231w)
* put composer license packages to @devowl-wp/composer-licenses (CU-22h231w)
* rename wordpress-packages and wordpress-plugins folder (CU-22h231w)
* revert empty commits for package folder rename (CU-22h231w)
* use phpunit-config and phpcs-config in all PHP packages (CU-22h231w)





## 4.1.15 (2022-04-04)


### chore

* translation hungary (CU-21999nd)





## 4.1.14 (2022-03-15)


### chore

* review 1 (CU-1jkmq84)
* review 2 (CU-1jkmq84)
* use wildcarded composer repository path (CU-1zvg32c)


### fix

* translate PRO version links (CU-20r2c4q)
* use correct link for Learn more in license dialog for CodeCanyon products (CU-1jkmq84)
* use correct PRO link in sidebar of free plugin (CU-we4qxh)


### refactor

* make plugin updates independent of single store (CU-1jkmq84)


### test

* smoke tests





## 4.1.13 (2022-03-01)


### ci

* use Traefik and Let's Encrypt in development environment (CU-1vxh681)





## 4.1.12 (2022-02-11)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.11 (2022-01-31)


### fix

* compatibility with Breadcrumb NavXT (CU-1vxqk2r)





## 4.1.10 (2022-01-25)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.9 (2022-01-17)


### build

* create cachebuster files only when needed, not in dev env (CU-1z46xp8)
* improve build and CI performance by 50% by using @devowl-wp/regexp-translation-extractor (CU-1z46xp8)


### fix

* some input fields started to lag while typing (CU-1y7nr4t)


### test

* compatibility with Xdebug 3 (CU-1z46xp8)





## 4.1.8 (2021-12-21)


### refactor

* move WordPress scripts to @devowl-wp/wp-docker package (CU-1xw9jgr)





## 4.1.7 (2021-12-15)


### fix

* compatibility with product delivery times in WooCommerce Germanized plugin (CU-1w8njtw)





## 4.1.6 (2021-12-01)


### fix

* allow to save global module with Divi library (CU-1u452et)
* compatiblity with WordPress 5.9 (CU-1vc94eh)





## 4.1.5 (2021-11-24)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.4 (2021-11-18)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.1.3 (2021-11-11)


### chore

* remove not-finished translations from feature branches to avoid huge ZIP size (CU-1rgn5h3)





## 4.1.2 (2021-11-03)


### chore

* new developer filter to rename page category taxonomy name RCB/PageCategory/TaxonomyName (CU-1my93jb)


### fix

* do not show a category tree for Woody Code Snippets plugin as it does register taxonomy only via is_admin





## 4.1.1 (2021-10-12)


### fix

* compatibility with Divi layout type taxonomy (CU-1knzt3x)
* compatibility with Divi layout type taxonomy (CU-1knzt3x)





# 4.1.0 (2021-09-30)


### build

* allow to define allowed locales to make release management possible (CU-1257b2b)
* copy files for i18n so we can drop override hooks and get performance boost (CU-wtt3hy)


### chore

* prepare for continuous localization with weblate (CU-f94bdr)
* refactor texts to use ellipses instead of ... (CU-f94bdr)
* remove language files from repository (CU-f94bdr)


### ci

* introduce continuous localization (CU-f94bdr)


### feat

* translation into Russian (CU-10hyfnv)


### fix

* developer filter RCL/Available did not work as expected (CU-1jtkvfh)


### perf

* remove translation overrides in preference of language files (CU-wtt3hy)


### refactor

* grunt-mojito to abstract grunt-continuous-localization package (CU-f94bdr)
* introduce @devowl-wp/continuous-integration





## 4.0.15 (2021-08-31)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.0.14 (2021-08-20)


### chore

* update PHP dependencies


### fix

* modify composer autoloading to avoid multiple injections (CU-w8kvcq)





## 4.0.13 (2021-08-10)


### refactor

* split i18n and request methods to save bundle size





## 4.0.12 (2021-08-05)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.0.11 (2021-07-16)


### chore

* update compatibility with WordPress 5.8 (CU-n9dfx9)





## 4.0.10 (2021-07-09)


### fix

* compatibility with Beaver Builder templates (CU-mxf9t2)





## 4.0.9 (2021-06-05)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.0.8 (2021-05-25)


### chore

* compatibility with latest antd version
* migarte loose mode to compiler assumptions
* polyfill setimmediate only if needed (CU-jh3czf)
* prettify code to new standard
* revert update of typedoc@0.20.x as it does not support monorepos yet
* upgrade dependencies to latest minor version


### ci

* move type check to validate stage


### fix

* do not rely on install_plugins capability, instead use activate_plugins so GIT-synced WP instances work too (CU-k599a2)


### test

* make window.fetch stubbable (CU-jh3cza)





## 4.0.7 (2021-05-14)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.0.6 (2021-05-12)


### fix

* product type is not copied to other language in WPML





## 4.0.5 (2021-05-11)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 4.0.4 (2021-05-11)


### fix

* compatibility with post formats (CU-j76m7v)
* featured functionality for WooCommerce products (CU-j76m7v)
* introduce new developer filter RCL/Categories to modify read categories (CU-uvak0t)


### refactor

* create wp-webpack package for WordPress packages and plugins
* introduce eslint-config package
* introduce new grunt workspaces package for monolithic usage
* introduce new package to validate composer licenses and generate disclaimer
* introduce new package to validate yarn licenses and generate disclaimer
* introduce new script to run-yarn-children commands
* move build scripts to proper backend and WP package
* move jest scripts to proper backend and WP package
* move PHP Unit bootstrap file to @devowl-wp/utils package
* move PHPUnit and Cypress scripts to @devowl-wp/utils package
* move technical doc scripts to proper WP and backend package
* move WP build process to @devowl-wp/utils
* move WP i18n scripts to @devowl-wp/utils
* move WP specific typescript config to @devowl-wp/wp-webpack package
* remove @devowl-wp/development package
* split stubs.php to individual plugins' package


### style

* compatibility with newest WooCommerce version





## 4.0.3 (2021-04-27)


### ci

* push plugin artifacts to GitLab Generic Packages registry (CU-hd6ef6)





## 4.0.2 (2021-04-15)


### fix

* do not make WPML and PolyLang terms automatically hierarchical (CU-gq7rrn)





## 4.0.1 (2021-03-30)


### docs

* formatting error in wordpress.org product description corrected





# 4.0.0 (2021-03-23)


### build

* plugin tested for WordPress 5.7 (CU-f4ydk2)


### chore

* directly link to new settings page in Welcome page after plugin activation (CU-dcy665)
* new developer hooks RCL/Typenow, RCL/TableCheckboxName and RCL/ForcePostTypes
* remove option in WooCommerce to make attributes hierarchical (CU-dcy665)
* removed options in Screen settings cause you will find it new settings page (CU-dcy665)
* review 1 (CU-dcy665)
* update antd to 4.8 (CU-dcy665)
* update link to Real Media Library in options page (CU-dcy665)
* update translations (CU-fz392b)


### ci

* do not show license form for E2E tests
* upload artifacts to license.devowl.io (CU-fq1kd8)


### docs

* add GIFs and new header image in wordpress.org description (CU-60d07j)
* rewrite wordpress.org product description (CU-60d07j)


### feat

* automatically install and activate Real Custom Post Order on button click (CU-dcy665)
* automatically make none-hierarchical taxonomies hierarchical
* introduce new automatic plugin updater (CU-fq1kd8)
* new options page in Settings > Category Management (CU-dcy665)
* rewrite English and German translation (CU-dcy665)
* translation to Dutch (CU-dcy665)
* translation to French (CU-dcy665)
* translation to Italian (CU-dcy665)
* translation to Spanish (CU-dcy665)


### fix

* better compatibility with Custom Post Type UI (CU-dcy665)
* compatibility with WP Job Openings


### style

* improve compatibility with WooCommerce list table (CU-dcy665)


### BREAKING CHANGE

* please reactivate your current license to get latest updates for PRO
* if you want to force none-hierarchical taxonomies use custom filter
or rename the taxonomy so it contains "_tag"
* WooCommerce attributes are automatically hierarchical and can no longer be disabled





## 3.5.7 (2021-03-03)


### fix

* posts are no longer droppable (hotfix, CU-f4yh7t)





## 3.5.6 (2021-03-02)


### fix

* respect language of newsletter subscriber to assign to correct newsletter (CU-aar8y9)


### test

* typing mistakes (CU-ewzae8)





## 3.5.5 (2021-02-24)


### chore

* rename go-links to new syntax (#en621h)


### docs

* rename test drive to sanbox (#ef26y8)
* update README to be compatible with Requires at least (CU-df2wb4)





## 3.5.4 (2021-02-02)


### fix

* compatibility with Elementor template library when clicking Add New button (CU-d13prj)
* compatibility with FooBox lightbox (CU-dczh1k)





## 3.5.3 (2021-01-24)


### fix

* compatibility with Password Protected Categories plugin





## 3.5.2 (2021-01-18)


### fix

* compatibility with JetEngine (CU-c6wp6e)





## 3.5.1 (2021-01-11)


### build

* reduce javascript bundle size by using babel runtime correctly with webpack / babel-loader




# 3.5.0 (2020-12-15)


### feat

* add toolbar button to view and edit category details (CU-bazvh7)


### fix

* compatibility with WP File Download (CU-bazty6)





## 3.4.8 (2020-12-10)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.4.7 (2020-12-09)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.4.6 (2020-12-09)


### chore

* new host for react-aiot git repository (CU-9rq9c7)
* update to cypress v6 (CU-7gmaxc)
* update to webpack v5 (CU-4akvz6)
* updates typings and min. Node.js and Yarn version (CU-9rq9c7)


### fix

* allow to directly drag&drop folder structure without toolbar button (CU-2cfq3f)
* automatically deactivate lite version when installing pro version (CU-5ymbqn)
* automatically deactivate lite version when installing pro version (CU-5ymbqn)





## 3.4.5 (2020-12-01)


### chore

* update dependencies (CU-3cj43t)
* update major dependencies (CU-3cj43t)
* update to composer v2 (CU-4akvjg)
* update to core-js@3 (CU-3cj43t)


### refactor

* enforce explicit-member-accessibility (CU-a6w5bv)





## 3.4.4 (2020-11-24)


### fix

* compatibility with upcoming WordPress 5.6 (CU-amzjdz)
* use no-store caching for WP REST API calls to avoid issues with browsers and CloudFlare (CU-agzcrp)





## 3.4.3 (2020-11-18)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.4.2 (2020-11-17)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.4.1 (2020-11-12)


### ci

* make scripts of individual plugins available in review applications (#a2z8z1)
* release to new license server (#8wpcr1)





# 3.4.0 (2020-10-23)


### chore

* merge tsconfig.json with backend-coding


### feat

* route PATCH PaddleIncompleteOrder (#8ywfdu)


### refactor

* use "import type" instead of "import"





## 3.3.9 (2020-10-16)


### build

* use node modules cache more aggressively in CI (#4akvz6)


### chore

* rename folder name (#94xp4g)


### fix

* count for WooCommerce products





## 3.3.8 (2020-10-09)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.3.7 (2020-10-08)


### chore

* **release :** version bump





## 3.3.6 (2020-09-29)


### build

* backend pot files and JSON generation conflict-resistent (#6utk9n)


### chore

* introduce development package (#6utk9n)
* move backend files to development package (#6utk9n)
* move grunt to common package (#6utk9n)
* move packages to development package (#6utk9n)
* move some files to development package (#6utk9n)
* remove grunt task aliases (#6utk9n)
* update dependencies (#3cj43t)
* update package.json scripts for each plugin (#6utk9n)





## 3.3.5 (2020-09-22)


### fix

* import settings (#82rk4n)
* remove urldecode as it is no longer needed





## 3.3.4 (2020-08-31)


### fix

* change of software license from GPLv3 to GPLv2 due to Envato Market restrictions (#4ufx38)





## 3.3.3 (2020-08-26)


### ci

* install container volume with unique name (#7gmuaa)


### perf

* remove transients and introduce expire options for better performance (#7cqdzj)





## 3.3.2 (2020-08-17)


### ci

* prefer dist in composer install





## 3.3.1 (2020-08-11)


### chore

* backends for monorepo introduced


### fix

* translation to german not applied (#76pbuh)





# 3.3.0 (2020-07-30)


### feat

* check support status for Envato license #CU-6pubwg
* introduce dashboard with assistant (#68k9ny)
* WordPress 5.5 compatibility (#6gqcm8)


### fix

* REST API notice in admin dashboard





## 3.2.23 (2020-07-02)


### chore

* allow to define allowed licenses in root package.json (#68jvq7)
* update dependencies (#3cj43t)


### fix

* correct error message when creating a duplicate category


### test

* cypress does not yet support window.fetch (#5whc2c)





## 3.2.22 (2020-06-17)


### chore

* add RCL/Node/Visible filter so you can programmatically hide categories in the tree
* update plugin updater newsletter text (#6gfghm)





## 3.2.21 (2020-06-12)


### chore

* i18n update (#5ut991)





## 3.2.20 (2020-05-27)


### build

* improve plugin build with webpack parallel builds


### ci

* use hot cache and node-gitlab-ci (#54r34g)


### docs

* redirect user documentation to new knowledgebase (#5etfa6)





## 3.2.19 (2020-05-20)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.2.18 (2020-05-14)


### docs

* new wordpress.org assets #6jbg2r





## 3.2.17 (2020-05-12)


### build

* cleanup temporary i18n files correctly


### fix

* avoid flickering at page load (#42ggat)
* correctly enqueue dependencies (#52jf92)
* effeciently make search results of categories droppable (#4wn81h)
* links not clickable on touch devices (#4yhhyd)
* use WooCommerce' core sorting mechanism instead of own (#5pp9b)





## 3.2.16 (2020-04-27)


### chore

* add hook_suffix to enqueue_scripts_and_styles function (#4ujzx0)


### docs

* update user documentation and redirect to help.devowl.io (#6c9urq)


### fix

* droppable does no longer work after searching for a folder / category (#4wn81h)
* error after renaming an item without changing the name (#4wm93q)


### test

* add smoke tests (#4rm5ae)
* automatically retry cypress tests (#3rmp6q)





## 3.2.15 (2020-04-20)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.2.14 (2020-04-16)

**Note:** This package (@devowl-wp/real-category-library) has been updated because a dependency, which is also shipped with this package, has changed.





## 3.2.13 (2020-04-16)


### build

* adjust legal information for envato pro version (#46fjk9)
* move test namespaces to composer autoload-dev (#4jnk84)
* reduce bundle size by ~25% (#4jjq0u)
* scope PHP vendor dependencies (#4jnk84)


### chore

* create real-ad package to introduce more UX after installing the plugin (#1aewyf)
* rename real-ad to real-utils (#4jpg5f)
* update to Cypress v4 (#2wee38)


### ci

* correctly build i18n frontend files (#4jjq0u)
* run package jobs also on devops changes


### docs

* broken links in developer documentation (#5yg1cf)


### fix

* link to Real Custom Post Order (#5ygvhw)


### style

* reformat php codebase (#4gg05b)


### test

* avoid session expired error in E2E tests (#3rmp6q)





## 3.2.12 (2020-03-31)


### chore

* update dependencies (#3cj43t)


### ci

* use concurrency 1 in yarn disclaimer generation


### fix

* posts could not be dragged when RCPO is active (#4cqgwj)


### style

* run prettier@2 on all files (#3cj43t)


### test

* configure jest setupFiles correctly with enzyme and clearMocks (#4akeab)
* generate test reports (#4cg6tp)





## 3.2.11 (2020-03-27)


### fix

* category tree not loaded even if tree view activated





## 3.2.10 (2020-03-23)


### build

* initial release of WP Real Custom Post Order plugin (#46ftef)





## 3.2.9 (2020-03-13)


### build

* migrate real-category-library to monorepo (#3ugu6a)


### fix

* i18n is not correctly initialized





## 3.2.8 (2020-03-10)
* prepare for WordPress 5.4
* fix bug with quick edit after fast mode content
* fix bug with WooCommerce panel
* update links to devowl.io

## 3.2.7 (2019-11-07)
* fix drag&drop of categories now represents the correct order after movement
* fix bug with ReactJS v17 warnings in your console

## 3.2.6 (2019-10-04)
* fix bug with two instances of MobX loaded

## 3.2.5 (2019-08-20)
* improve experience when sorting post entries
* fix bug with sort mode in subcategories
* fix bug with search box height in some cases that it needed too much space

## 3.2.4 (2019-06-02)
* fix bug when copy post that it is draggable again

## 3.2.3 (2019-05-07)
* add "title" attribute to tree node for accessibility
* update to latest AIOT version

## 3.2.2 (2019-03-19)
* add button to expand/collapse all node items
* fix bug with style/script dependencies
* fix bug with missing animations
* improve performance: Loading a tree with 10,000 nodes in 1s (the old way in 30s)

## 3.2.1 (2018-12-10)
* add notice to the tree if the product is not yet registered

# 3.2.0 (2018-10-27)
* add auto update functionality
* fix bug with new created folders and droppable posts
* fix bug with WPML API requests

## 3.1.1 (2018-08-17)
* fix bug with relocating categories to a category with no childs yet

# 3.1.0 (2018-08-05)
* improve the custom order performance
* improve the way of handling custom order
* fix bug with mass categories
* fix bug with "Plain" permalink structure
* fix bug with collapsable/expandable folders

## 3.0.6 (2018-July-20)
* improve error handling with plugins like Clearfy
* fix bug with "&" in category names
* fix bug with PHP 5.3
* fix bug with non-SSL API root urls
* fix bug with pagination in list mode after switching folder
* fix bug with Gutenberg 3.1.x (https://git.io/f4SXU)

## 3.0.5 (2018-06-15)
* add compatibility with WP Dark Mode plugin
* add help message if WP REST API is not reachable through HTTP verbs
* fix bug with scroll container in media modal in IE/Edge/Firefox
* Use global WP REST API parameters instead of DELETE / PUT

## 3.0.4 (2018-06-4)
* fix bug with spinning loader when permalink structure is "Plain"
* fix bug with german translation
* fix bug with IE11/Edge browser

## 3.0.3 (2018-05-17)
* fix bug with WPML and fetching a tree from another language within admin dashboard

## 3.0.2 (2018-05-08)
* improve performance
* fix bug with switching from category to "All posts"
* add Mobx State Tree for frontend state management

## 3.0.1 (2018-03-09)
* fix bug with mobile devices

# 3.0.0 (2018-02-28)
* Complete code rewrite
* ... Same functionality with improved performance
* ... with an eye on smooth user interface and experience
* The plugin is now available in the following languages: English, German
* fix bug with WooCommerce 3.3.x product attributes
* Sidebar is now fully written in ReactJS v16
* The plugin is now bundled with webpack v3
* Minimum of PHP 5.3 required now (in each update you'll find v2.4 for PHP 5.0+ compatibility)
* Minimum of WordPress 4.4 required now (in each update you'll find v2.4 for 4.0+ compatibility)
* PHP Classes modernized with autoloading and namespaces
* WP REST API v2 for API programming, no longer use admin-ajax.php for your CRUD operations
* Implemented cachebuster to avoid cache problems
* ApiGen for PHP Documentation
* JSDoc for JavaScript Documentation
* apiDoc for API Documentation
* WP HookDoc for Filters & Actions Documentation
* Custom filters and actions which affected the tree ouput are now removed, you have to do this in JS now
* All JavaScript events / hooks are removed now - contact me so I can implement for you

# 2.4.0 (2018-01-16)
* add support for WooCommerce attributes (through an option)
* improve the tax switcher (when multiple category types are available)

## 2.3.2 (2017-11-24)
* fix bug with hidden sidebar without resized before
* add filter to hide category try for specific taxonomies (RCL/Available)

## 2.3.1 (2017-10-31)
* fix bug after creating a new post the nodes are not clickable
* fix bug when switching taxonomy when fast mode is deactivated

# 2.3.0 (2017-10-28)
* add ability to expand/collapse the complete sidebar by doubleclick the resize button
* fix bug with WooCommerce 3.x
* fix bug with touch devices (no dropdown was touchable)
* fix bug with ESC key in rename mode
* fix bug with creating a new folder and switch back to previous
* fix bug with taxonomy switcher (especially WooCommerce products)
* improve the save of localStorage items within one row per tree instance

## 2.2.1 (2017-09-22)
* improve the tax switcher when more than two taxonomies are available
* fix bug when switching to an taxonomy with no categories
* add new filter to disable RCL sorting mechanism

# 2.2.0 (2017-06-24)
* add full compatibility with WordPress 4.8
* add ESC to close the rename category action
* add F2 handler to rename a category
* add double click event to open category hierarchy
* add search input field for categories
* fix bug with some browsers when local storage is disabled

## 2.1.1 (2017-03-24)
* add https://matthias-web.com as author url
* improve the way of rearrange mode, the folders gets expand after 700ms of hover
* fix bug with > 600 categories
* fix bug with styles and scripts
* fix bug with rearrange

# 2.1.0 (2016-11-24)
* add new version of AIO tree view (1.3.1)
* add the MatthiasWeb promotion dialog
* add responsivness
* improve performance with lazy loading of categories
* improve changelog
* Use rootParentId in jQuery AIO tree
* fix bug with jQuery AIO tree version when RML is enabled

## 2.0.2 (2016-09-09)
* Conflict with jQuery.allInOneTree

## 2.0.1 (2016-09-02)
* add minified scripts and styles
* fix capability bug while logged out
* add Javascript polyfill's to avoid browser incompatibility
* fix bug for crashed safari browser
* fix bug with boolval function

# 2.0.0 (2016-08-08)
* add more userfriendly toolbar (ported from RML)
* add fixed header
* add "fast mode" for switching between taxonomies without page reload
* add "fast mode" for switching between categories without page reload
* add "fast mode" for switching between pages without page reload
* add taxonomy to pages
* add custom order for taxonomies
* add new advertisment system for MatthiasWeb
* Complete recode of PHP and Javascript

## 1.1.1 (2016-01-20)
* add facebook advert on plugin activation
* fix count of categories

# 1.1.0 (2015-11-28)
* fix conditional tag to create / sort items
* fix hierarchical read of categories
* fix append method with CTRL - now tap and hold any key to append

## 1.0.2 (2015-11-13)
* remove unnecessary code
* fix jquery conflict

## 1.0.1 (2015-11-10)
* fix javascript error for firefox, ie and opera

# 1.0.0 (2015-11-08)
* initial Release
