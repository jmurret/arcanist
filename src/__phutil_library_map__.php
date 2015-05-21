<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'ArcanistAliasWorkflow' => 'workflow/ArcanistAliasWorkflow.php',
    'ArcanistAmendWorkflow' => 'workflow/ArcanistAmendWorkflow.php',
    'ArcanistAnoidWorkflow' => 'workflow/ArcanistAnoidWorkflow.php',
    'ArcanistBackoutWorkflow' => 'workflow/ArcanistBackoutWorkflow.php',
    'ArcanistBaseCommitParser' => 'parser/ArcanistBaseCommitParser.php',
    'ArcanistBaseCommitParserTestCase' => 'parser/__tests__/ArcanistBaseCommitParserTestCase.php',
    'ArcanistBaseXHPASTLinter' => 'lint/linter/ArcanistBaseXHPASTLinter.php',
    'ArcanistBookmarkWorkflow' => 'workflow/ArcanistBookmarkWorkflow.php',
    'ArcanistBranchWorkflow' => 'workflow/ArcanistBranchWorkflow.php',
    'ArcanistBritishTestCase' => 'configuration/__tests__/ArcanistBritishTestCase.php',
    'ArcanistBrowseWorkflow' => 'workflow/ArcanistBrowseWorkflow.php',
    'ArcanistBundle' => 'parser/ArcanistBundle.php',
    'ArcanistBundleTestCase' => 'parser/__tests__/ArcanistBundleTestCase.php',
    'ArcanistCSSLintLinter' => 'lint/linter/ArcanistCSSLintLinter.php',
    'ArcanistCSSLintLinterTestCase' => 'lint/linter/__tests__/ArcanistCSSLintLinterTestCase.php',
    'ArcanistCSharpLinter' => 'lint/linter/ArcanistCSharpLinter.php',
    'ArcanistCallConduitWorkflow' => 'workflow/ArcanistCallConduitWorkflow.php',
    'ArcanistCapabilityNotSupportedException' => 'workflow/exception/ArcanistCapabilityNotSupportedException.php',
    'ArcanistCheckstyleXMLLintRenderer' => 'lint/renderer/ArcanistCheckstyleXMLLintRenderer.php',
    'ArcanistChmodLinter' => 'lint/linter/ArcanistChmodLinter.php',
    'ArcanistChmodLinterTestCase' => 'lint/linter/__tests__/ArcanistChmodLinterTestCase.php',
    'ArcanistCloseRevisionWorkflow' => 'workflow/ArcanistCloseRevisionWorkflow.php',
    'ArcanistCloseWorkflow' => 'workflow/ArcanistCloseWorkflow.php',
    'ArcanistClosureLinter' => 'lint/linter/ArcanistClosureLinter.php',
    'ArcanistClosureLinterTestCase' => 'lint/linter/__tests__/ArcanistClosureLinterTestCase.php',
    'ArcanistCoffeeLintLinter' => 'lint/linter/ArcanistCoffeeLintLinter.php',
    'ArcanistCoffeeLintLinterTestCase' => 'lint/linter/__tests__/ArcanistCoffeeLintLinterTestCase.php',
    'ArcanistCommentRemover' => 'parser/ArcanistCommentRemover.php',
    'ArcanistCommentRemoverTestCase' => 'parser/__tests__/ArcanistCommentRemoverTestCase.php',
    'ArcanistCommitWorkflow' => 'workflow/ArcanistCommitWorkflow.php',
    'ArcanistCompilerLintRenderer' => 'lint/renderer/ArcanistCompilerLintRenderer.php',
    'ArcanistComprehensiveLintEngine' => 'lint/engine/ArcanistComprehensiveLintEngine.php',
    'ArcanistConfiguration' => 'configuration/ArcanistConfiguration.php',
    'ArcanistConfigurationDrivenLintEngine' => 'lint/engine/ArcanistConfigurationDrivenLintEngine.php',
    'ArcanistConfigurationManager' => 'configuration/ArcanistConfigurationManager.php',
    'ArcanistConsoleLintRenderer' => 'lint/renderer/ArcanistConsoleLintRenderer.php',
    'ArcanistCoverWorkflow' => 'workflow/ArcanistCoverWorkflow.php',
    'ArcanistCppcheckLinter' => 'lint/linter/ArcanistCppcheckLinter.php',
    'ArcanistCppcheckLinterTestCase' => 'lint/linter/__tests__/ArcanistCppcheckLinterTestCase.php',
    'ArcanistCpplintLinter' => 'lint/linter/ArcanistCpplintLinter.php',
    'ArcanistCpplintLinterTestCase' => 'lint/linter/__tests__/ArcanistCpplintLinterTestCase.php',
    'ArcanistDiffChange' => 'parser/diff/ArcanistDiffChange.php',
    'ArcanistDiffChangeType' => 'parser/diff/ArcanistDiffChangeType.php',
    'ArcanistDiffHunk' => 'parser/diff/ArcanistDiffHunk.php',
    'ArcanistDiffParser' => 'parser/ArcanistDiffParser.php',
    'ArcanistDiffParserTestCase' => 'parser/__tests__/ArcanistDiffParserTestCase.php',
    'ArcanistDiffUtils' => 'difference/ArcanistDiffUtils.php',
    'ArcanistDiffUtilsTestCase' => 'difference/__tests__/ArcanistDiffUtilsTestCase.php',
    'ArcanistDiffWorkflow' => 'workflow/ArcanistDiffWorkflow.php',
    'ArcanistDifferentialCommitMessage' => 'differential/ArcanistDifferentialCommitMessage.php',
    'ArcanistDifferentialCommitMessageParserException' => 'differential/ArcanistDifferentialCommitMessageParserException.php',
    'ArcanistDifferentialDependencyGraph' => 'differential/ArcanistDifferentialDependencyGraph.php',
    'ArcanistDifferentialRevisionHash' => 'differential/constants/ArcanistDifferentialRevisionHash.php',
    'ArcanistDifferentialRevisionStatus' => 'differential/constants/ArcanistDifferentialRevisionStatus.php',
    'ArcanistDownloadWorkflow' => 'workflow/ArcanistDownloadWorkflow.php',
    'ArcanistEventType' => 'events/constant/ArcanistEventType.php',
    'ArcanistExportWorkflow' => 'workflow/ArcanistExportWorkflow.php',
    'ArcanistExternalLinter' => 'lint/linter/ArcanistExternalLinter.php',
    'ArcanistExternalLinterTestCase' => 'lint/linter/__tests__/ArcanistExternalLinterTestCase.php',
    'ArcanistFeatureWorkflow' => 'workflow/ArcanistFeatureWorkflow.php',
    'ArcanistFilenameLinter' => 'lint/linter/ArcanistFilenameLinter.php',
    'ArcanistFilenameLinterTestCase' => 'lint/linter/__tests__/ArcanistFilenameLinterTestCase.php',
    'ArcanistFlagWorkflow' => 'workflow/ArcanistFlagWorkflow.php',
    'ArcanistFlake8Linter' => 'lint/linter/ArcanistFlake8Linter.php',
    'ArcanistFlake8LinterTestCase' => 'lint/linter/__tests__/ArcanistFlake8LinterTestCase.php',
    'ArcanistFutureLinter' => 'lint/linter/ArcanistFutureLinter.php',
    'ArcanistGeneratedLinter' => 'lint/linter/ArcanistGeneratedLinter.php',
    'ArcanistGeneratedLinterTestCase' => 'lint/linter/__tests__/ArcanistGeneratedLinterTestCase.php',
    'ArcanistGetConfigWorkflow' => 'workflow/ArcanistGetConfigWorkflow.php',
    'ArcanistGitAPI' => 'repository/api/ArcanistGitAPI.php',
    'ArcanistGoLintLinter' => 'lint/linter/ArcanistGoLintLinter.php',
    'ArcanistGoLintLinterTestCase' => 'lint/linter/__tests__/ArcanistGoLintLinterTestCase.php',
    'ArcanistGoTestResultParser' => 'unit/parser/ArcanistGoTestResultParser.php',
    'ArcanistGoTestResultParserTestCase' => 'unit/parser/__tests__/ArcanistGoTestResultParserTestCase.php',
    'ArcanistHLintLinter' => 'lint/linter/ArcanistHLintLinter.php',
    'ArcanistHLintLinterTestCase' => 'lint/linter/__tests__/ArcanistHLintLinterTestCase.php',
    'ArcanistHelpWorkflow' => 'workflow/ArcanistHelpWorkflow.php',
    'ArcanistHgClientChannel' => 'hgdaemon/ArcanistHgClientChannel.php',
    'ArcanistHgProxyClient' => 'hgdaemon/ArcanistHgProxyClient.php',
    'ArcanistHgProxyServer' => 'hgdaemon/ArcanistHgProxyServer.php',
    'ArcanistHgServerChannel' => 'hgdaemon/ArcanistHgServerChannel.php',
    'ArcanistInstallCertificateWorkflow' => 'workflow/ArcanistInstallCertificateWorkflow.php',
    'ArcanistJSHintLinter' => 'lint/linter/ArcanistJSHintLinter.php',
    'ArcanistJSHintLinterTestCase' => 'lint/linter/__tests__/ArcanistJSHintLinterTestCase.php',
    'ArcanistJSONLintLinter' => 'lint/linter/ArcanistJSONLintLinter.php',
    'ArcanistJSONLintLinterTestCase' => 'lint/linter/__tests__/ArcanistJSONLintLinterTestCase.php',
    'ArcanistJSONLintRenderer' => 'lint/renderer/ArcanistJSONLintRenderer.php',
    'ArcanistJSONLinter' => 'lint/linter/ArcanistJSONLinter.php',
    'ArcanistJSONLinterTestCase' => 'lint/linter/__tests__/ArcanistJSONLinterTestCase.php',
    'ArcanistJscsLinter' => 'lint/linter/ArcanistJscsLinter.php',
    'ArcanistJscsLinterTestCase' => 'lint/linter/__tests__/ArcanistJscsLinterTestCase.php',
    'ArcanistLandWorkflow' => 'workflow/ArcanistLandWorkflow.php',
    'ArcanistLesscLinter' => 'lint/linter/ArcanistLesscLinter.php',
    'ArcanistLesscLinterTestCase' => 'lint/linter/__tests__/ArcanistLesscLinterTestCase.php',
    'ArcanistLiberateWorkflow' => 'workflow/ArcanistLiberateWorkflow.php',
    'ArcanistLibraryTestCase' => '__tests__/ArcanistLibraryTestCase.php',
    'ArcanistLintEngine' => 'lint/engine/ArcanistLintEngine.php',
    'ArcanistLintMessage' => 'lint/ArcanistLintMessage.php',
    'ArcanistLintPatcher' => 'lint/ArcanistLintPatcher.php',
    'ArcanistLintRenderer' => 'lint/renderer/ArcanistLintRenderer.php',
    'ArcanistLintResult' => 'lint/ArcanistLintResult.php',
    'ArcanistLintSeverity' => 'lint/ArcanistLintSeverity.php',
    'ArcanistLintTrapLinter' => 'lint/linter/ArcanistLintTrapLinter.php',
    'ArcanistLintWorkflow' => 'workflow/ArcanistLintWorkflow.php',
    'ArcanistLinter' => 'lint/linter/ArcanistLinter.php',
    'ArcanistLinterTestCase' => 'lint/linter/__tests__/ArcanistLinterTestCase.php',
    'ArcanistLintersWorkflow' => 'workflow/ArcanistLintersWorkflow.php',
    'ArcanistListWorkflow' => 'workflow/ArcanistListWorkflow.php',
    'ArcanistMercurialAPI' => 'repository/api/ArcanistMercurialAPI.php',
    'ArcanistMercurialParser' => 'repository/parser/ArcanistMercurialParser.php',
    'ArcanistMercurialParserTestCase' => 'repository/parser/__tests__/ArcanistMercurialParserTestCase.php',
    'ArcanistMergeConflictLinter' => 'lint/linter/ArcanistMergeConflictLinter.php',
    'ArcanistMergeConflictLinterTestCase' => 'lint/linter/__tests__/ArcanistMergeConflictLinterTestCase.php',
    'ArcanistMissingLinterException' => 'lint/linter/exception/ArcanistMissingLinterException.php',
    'ArcanistNoEffectException' => 'exception/usage/ArcanistNoEffectException.php',
    'ArcanistNoEngineException' => 'exception/usage/ArcanistNoEngineException.php',
    'ArcanistNoLintLinter' => 'lint/linter/ArcanistNoLintLinter.php',
    'ArcanistNoLintLinterTestCase' => 'lint/linter/__tests__/ArcanistNoLintLinterTestCase.php',
    'ArcanistNoneLintRenderer' => 'lint/renderer/ArcanistNoneLintRenderer.php',
    'ArcanistPEP8Linter' => 'lint/linter/ArcanistPEP8Linter.php',
    'ArcanistPEP8LinterTestCase' => 'lint/linter/__tests__/ArcanistPEP8LinterTestCase.php',
    'ArcanistPasteWorkflow' => 'workflow/ArcanistPasteWorkflow.php',
    'ArcanistPatchWorkflow' => 'workflow/ArcanistPatchWorkflow.php',
    'ArcanistPhpLinter' => 'lint/linter/ArcanistPhpLinter.php',
    'ArcanistPhpLinterTestCase' => 'lint/linter/__tests__/ArcanistPhpLinterTestCase.php',
    'ArcanistPhpcsLinter' => 'lint/linter/ArcanistPhpcsLinter.php',
    'ArcanistPhpcsLinterTestCase' => 'lint/linter/__tests__/ArcanistPhpcsLinterTestCase.php',
    'ArcanistPhpunitTestResultParser' => 'unit/parser/ArcanistPhpunitTestResultParser.php',
    'ArcanistPhrequentWorkflow' => 'workflow/ArcanistPhrequentWorkflow.php',
    'ArcanistPhutilLibraryLinter' => 'lint/linter/ArcanistPhutilLibraryLinter.php',
    'ArcanistPhutilXHPASTLinter' => 'lint/linter/ArcanistPhutilXHPASTLinter.php',
    'ArcanistPhutilXHPASTLinterTestCase' => 'lint/linter/__tests__/ArcanistPhutilXHPASTLinterTestCase.php',
    'ArcanistPuppetLintLinter' => 'lint/linter/ArcanistPuppetLintLinter.php',
    'ArcanistPuppetLintLinterTestCase' => 'lint/linter/__tests__/ArcanistPuppetLintLinterTestCase.php',
    'ArcanistPyFlakesLinter' => 'lint/linter/ArcanistPyFlakesLinter.php',
    'ArcanistPyFlakesLinterTestCase' => 'lint/linter/__tests__/ArcanistPyFlakesLinterTestCase.php',
    'ArcanistPyLintLinter' => 'lint/linter/ArcanistPyLintLinter.php',
    'ArcanistPyLintLinterTestCase' => 'lint/linter/__tests__/ArcanistPyLintLinterTestCase.php',
    'ArcanistRepositoryAPI' => 'repository/api/ArcanistRepositoryAPI.php',
    'ArcanistRepositoryAPIMiscTestCase' => 'repository/api/__tests__/ArcanistRepositoryAPIMiscTestCase.php',
    'ArcanistRepositoryAPIStateTestCase' => 'repository/api/__tests__/ArcanistRepositoryAPIStateTestCase.php',
    'ArcanistRevertWorkflow' => 'workflow/ArcanistRevertWorkflow.php',
    'ArcanistRuboCopLinter' => 'lint/linter/ArcanistRuboCopLinter.php',
    'ArcanistRuboCopLinterTestCase' => 'lint/linter/__tests__/ArcanistRuboCopLinterTestCase.php',
    'ArcanistRubyLinter' => 'lint/linter/ArcanistRubyLinter.php',
    'ArcanistRubyLinterTestCase' => 'lint/linter/__tests__/ArcanistRubyLinterTestCase.php',
    'ArcanistScriptAndRegexLinter' => 'lint/linter/ArcanistScriptAndRegexLinter.php',
    'ArcanistSetConfigWorkflow' => 'workflow/ArcanistSetConfigWorkflow.php',
    'ArcanistSettings' => 'configuration/ArcanistSettings.php',
    'ArcanistShellCompleteWorkflow' => 'workflow/ArcanistShellCompleteWorkflow.php',
    'ArcanistSingleLintEngine' => 'lint/engine/ArcanistSingleLintEngine.php',
    'ArcanistSpellingLinter' => 'lint/linter/ArcanistSpellingLinter.php',
    'ArcanistSpellingLinterTestCase' => 'lint/linter/__tests__/ArcanistSpellingLinterTestCase.php',
    'ArcanistStartWorkflow' => 'workflow/ArcanistStartWorkflow.php',
    'ArcanistStopWorkflow' => 'workflow/ArcanistStopWorkflow.php',
    'ArcanistSubversionAPI' => 'repository/api/ArcanistSubversionAPI.php',
    'ArcanistSummaryLintRenderer' => 'lint/renderer/ArcanistSummaryLintRenderer.php',
    'ArcanistTasksWorkflow' => 'workflow/ArcanistTasksWorkflow.php',
    'ArcanistTestResultParser' => 'unit/parser/ArcanistTestResultParser.php',
    'ArcanistTestXHPASTLintSwitchHook' => 'lint/linter/__tests__/ArcanistTestXHPASTLintSwitchHook.php',
    'ArcanistTextLinter' => 'lint/linter/ArcanistTextLinter.php',
    'ArcanistTextLinterTestCase' => 'lint/linter/__tests__/ArcanistTextLinterTestCase.php',
    'ArcanistTimeWorkflow' => 'workflow/ArcanistTimeWorkflow.php',
    'ArcanistTodoWorkflow' => 'workflow/ArcanistTodoWorkflow.php',
    'ArcanistUSEnglishTranslation' => 'internationalization/ArcanistUSEnglishTranslation.php',
    'ArcanistUnitConsoleRenderer' => 'unit/renderer/ArcanistUnitConsoleRenderer.php',
    'ArcanistUnitRenderer' => 'unit/renderer/ArcanistUnitRenderer.php',
    'ArcanistUnitTestEngine' => 'unit/engine/ArcanistUnitTestEngine.php',
    'ArcanistUnitTestResult' => 'unit/ArcanistUnitTestResult.php',
    'ArcanistUnitTestableLintEngine' => 'lint/engine/ArcanistUnitTestableLintEngine.php',
    'ArcanistUnitWorkflow' => 'workflow/ArcanistUnitWorkflow.php',
    'ArcanistUpgradeWorkflow' => 'workflow/ArcanistUpgradeWorkflow.php',
    'ArcanistUploadWorkflow' => 'workflow/ArcanistUploadWorkflow.php',
    'ArcanistUsageException' => 'exception/ArcanistUsageException.php',
    'ArcanistUserAbortException' => 'exception/usage/ArcanistUserAbortException.php',
    'ArcanistVersionWorkflow' => 'workflow/ArcanistVersionWorkflow.php',
    'ArcanistWhichWorkflow' => 'workflow/ArcanistWhichWorkflow.php',
    'ArcanistWorkflow' => 'workflow/ArcanistWorkflow.php',
    'ArcanistWorkingCopyIdentity' => 'workingcopyidentity/ArcanistWorkingCopyIdentity.php',
    'ArcanistXHPASTLintNamingHook' => 'lint/linter/xhpast/ArcanistXHPASTLintNamingHook.php',
    'ArcanistXHPASTLintNamingHookTestCase' => 'lint/linter/xhpast/__tests__/ArcanistXHPASTLintNamingHookTestCase.php',
    'ArcanistXHPASTLintSwitchHook' => 'lint/linter/xhpast/ArcanistXHPASTLintSwitchHook.php',
    'ArcanistXHPASTLinter' => 'lint/linter/ArcanistXHPASTLinter.php',
    'ArcanistXHPASTLinterTestCase' => 'lint/linter/__tests__/ArcanistXHPASTLinterTestCase.php',
    'ArcanistXMLLinter' => 'lint/linter/ArcanistXMLLinter.php',
    'ArcanistXMLLinterTestCase' => 'lint/linter/__tests__/ArcanistXMLLinterTestCase.php',
    'ArcanistXUnitTestResultParser' => 'unit/parser/ArcanistXUnitTestResultParser.php',
    'CSharpToolsTestEngine' => 'unit/engine/CSharpToolsTestEngine.php',
    'ConfigurableGolangTestEngine' => 'unit/engine/ConfigurableGolangTestEngine.php',
    'ConfigurablePytestTestEngine' => 'unit/engine/ConfigurablePytestTestEngine.php',
    'NoseTestEngine' => 'unit/engine/NoseTestEngine.php',
    'PhpunitTestEngine' => 'unit/engine/PhpunitTestEngine.php',
    'PhpunitTestEngineTestCase' => 'unit/engine/__tests__/PhpunitTestEngineTestCase.php',
    'PhutilTestCase' => 'unit/engine/phutil/PhutilTestCase.php',
    'PhutilTestCaseTestCase' => 'unit/engine/phutil/testcase/PhutilTestCaseTestCase.php',
    'PhutilTestSkippedException' => 'unit/engine/phutil/testcase/PhutilTestSkippedException.php',
    'PhutilTestTerminatedException' => 'unit/engine/phutil/testcase/PhutilTestTerminatedException.php',
    'PhutilUnitTestEngine' => 'unit/engine/PhutilUnitTestEngine.php',
    'PhutilUnitTestEngineTestCase' => 'unit/engine/__tests__/PhutilUnitTestEngineTestCase.php',
    'PytestTestEngine' => 'unit/engine/PytestTestEngine.php',
    'TAPTestEngine' => 'unit/engine/TAPTestEngine.php',
    'UberStandardLinter' => 'lint/linter/UberStandardLinter.php',
    'XUnitTestEngine' => 'unit/engine/XUnitTestEngine.php',
    'XUnitTestResultParserTestCase' => 'unit/parser/__tests__/XUnitTestResultParserTestCase.php',
  ),
  'function' => array(
    'unit_test_engine_get_lines' => 'unit/engine/TAPTestEngine.php',
    'unit_test_engine_sort_lines' => 'unit/engine/TAPTestEngine.php',
  ),
  'xmap' => array(
    'ArcanistAliasWorkflow' => 'ArcanistWorkflow',
    'ArcanistAmendWorkflow' => 'ArcanistWorkflow',
    'ArcanistAnoidWorkflow' => 'ArcanistWorkflow',
    'ArcanistBackoutWorkflow' => 'ArcanistWorkflow',
    'ArcanistBaseCommitParserTestCase' => 'PhutilTestCase',
    'ArcanistBaseXHPASTLinter' => 'ArcanistFutureLinter',
    'ArcanistBookmarkWorkflow' => 'ArcanistFeatureWorkflow',
    'ArcanistBranchWorkflow' => 'ArcanistFeatureWorkflow',
    'ArcanistBritishTestCase' => 'PhutilTestCase',
    'ArcanistBrowseWorkflow' => 'ArcanistWorkflow',
    'ArcanistBundleTestCase' => 'PhutilTestCase',
    'ArcanistCSSLintLinter' => 'ArcanistExternalLinter',
    'ArcanistCSSLintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistCSharpLinter' => 'ArcanistLinter',
    'ArcanistCallConduitWorkflow' => 'ArcanistWorkflow',
    'ArcanistCapabilityNotSupportedException' => 'Exception',
    'ArcanistCheckstyleXMLLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistChmodLinter' => 'ArcanistLinter',
    'ArcanistChmodLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistCloseRevisionWorkflow' => 'ArcanistWorkflow',
    'ArcanistCloseWorkflow' => 'ArcanistWorkflow',
    'ArcanistClosureLinter' => 'ArcanistExternalLinter',
    'ArcanistClosureLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistCoffeeLintLinter' => 'ArcanistExternalLinter',
    'ArcanistCoffeeLintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistCommentRemoverTestCase' => 'PhutilTestCase',
    'ArcanistCommitWorkflow' => 'ArcanistWorkflow',
    'ArcanistCompilerLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistComprehensiveLintEngine' => 'ArcanistLintEngine',
    'ArcanistConfigurationDrivenLintEngine' => 'ArcanistLintEngine',
    'ArcanistConsoleLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistCoverWorkflow' => 'ArcanistWorkflow',
    'ArcanistCppcheckLinter' => 'ArcanistExternalLinter',
    'ArcanistCppcheckLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistCpplintLinter' => 'ArcanistExternalLinter',
    'ArcanistCpplintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistDiffParserTestCase' => 'PhutilTestCase',
    'ArcanistDiffUtilsTestCase' => 'PhutilTestCase',
    'ArcanistDiffWorkflow' => 'ArcanistWorkflow',
    'ArcanistDifferentialCommitMessageParserException' => 'Exception',
    'ArcanistDifferentialDependencyGraph' => 'AbstractDirectedGraph',
    'ArcanistDownloadWorkflow' => 'ArcanistWorkflow',
    'ArcanistEventType' => 'PhutilEventType',
    'ArcanistExportWorkflow' => 'ArcanistWorkflow',
    'ArcanistExternalLinter' => 'ArcanistFutureLinter',
    'ArcanistExternalLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistFeatureWorkflow' => 'ArcanistWorkflow',
    'ArcanistFilenameLinter' => 'ArcanistLinter',
    'ArcanistFilenameLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistFlagWorkflow' => 'ArcanistWorkflow',
    'ArcanistFlake8Linter' => 'ArcanistExternalLinter',
    'ArcanistFlake8LinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistFutureLinter' => 'ArcanistLinter',
    'ArcanistGeneratedLinter' => 'ArcanistLinter',
    'ArcanistGeneratedLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistGetConfigWorkflow' => 'ArcanistWorkflow',
    'ArcanistGitAPI' => 'ArcanistRepositoryAPI',
    'ArcanistGoLintLinter' => 'ArcanistExternalLinter',
    'ArcanistGoLintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistGoTestResultParser' => 'ArcanistTestResultParser',
    'ArcanistGoTestResultParserTestCase' => 'PhutilTestCase',
    'ArcanistHLintLinter' => 'ArcanistExternalLinter',
    'ArcanistHLintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistHelpWorkflow' => 'ArcanistWorkflow',
    'ArcanistHgClientChannel' => 'PhutilProtocolChannel',
    'ArcanistHgServerChannel' => 'PhutilProtocolChannel',
    'ArcanistInstallCertificateWorkflow' => 'ArcanistWorkflow',
    'ArcanistJSHintLinter' => 'ArcanistExternalLinter',
    'ArcanistJSHintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistJSONLintLinter' => 'ArcanistExternalLinter',
    'ArcanistJSONLintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistJSONLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistJSONLinter' => 'ArcanistLinter',
    'ArcanistJSONLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistJscsLinter' => 'ArcanistExternalLinter',
    'ArcanistJscsLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistLandWorkflow' => 'ArcanistWorkflow',
    'ArcanistLesscLinter' => 'ArcanistExternalLinter',
    'ArcanistLesscLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistLiberateWorkflow' => 'ArcanistWorkflow',
    'ArcanistLibraryTestCase' => 'PhutilLibraryTestCase',
    'ArcanistLintTrapLinter' => 'ArcanistExternalLinter',
    'ArcanistLintWorkflow' => 'ArcanistWorkflow',
    'ArcanistLinterTestCase' => 'PhutilTestCase',
    'ArcanistLintersWorkflow' => 'ArcanistWorkflow',
    'ArcanistListWorkflow' => 'ArcanistWorkflow',
    'ArcanistMercurialAPI' => 'ArcanistRepositoryAPI',
    'ArcanistMercurialParserTestCase' => 'PhutilTestCase',
    'ArcanistMergeConflictLinter' => 'ArcanistLinter',
    'ArcanistMergeConflictLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistMissingLinterException' => 'Exception',
    'ArcanistNoEffectException' => 'ArcanistUsageException',
    'ArcanistNoEngineException' => 'ArcanistUsageException',
    'ArcanistNoLintLinter' => 'ArcanistLinter',
    'ArcanistNoLintLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistNoneLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistPEP8Linter' => 'ArcanistExternalLinter',
    'ArcanistPEP8LinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistPasteWorkflow' => 'ArcanistWorkflow',
    'ArcanistPatchWorkflow' => 'ArcanistWorkflow',
    'ArcanistPhpLinter' => 'ArcanistExternalLinter',
    'ArcanistPhpLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistPhpcsLinter' => 'ArcanistExternalLinter',
    'ArcanistPhpcsLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistPhpunitTestResultParser' => 'ArcanistTestResultParser',
    'ArcanistPhrequentWorkflow' => 'ArcanistWorkflow',
    'ArcanistPhutilLibraryLinter' => 'ArcanistLinter',
    'ArcanistPhutilXHPASTLinter' => 'ArcanistBaseXHPASTLinter',
    'ArcanistPhutilXHPASTLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistPuppetLintLinter' => 'ArcanistExternalLinter',
    'ArcanistPuppetLintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistPyFlakesLinter' => 'ArcanistExternalLinter',
    'ArcanistPyFlakesLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistPyLintLinter' => 'ArcanistExternalLinter',
    'ArcanistPyLintLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistRepositoryAPIMiscTestCase' => 'PhutilTestCase',
    'ArcanistRepositoryAPIStateTestCase' => 'PhutilTestCase',
    'ArcanistRevertWorkflow' => 'ArcanistWorkflow',
    'ArcanistRuboCopLinter' => 'ArcanistExternalLinter',
    'ArcanistRuboCopLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistRubyLinter' => 'ArcanistExternalLinter',
    'ArcanistRubyLinterTestCase' => 'ArcanistExternalLinterTestCase',
    'ArcanistScriptAndRegexLinter' => 'ArcanistLinter',
    'ArcanistSetConfigWorkflow' => 'ArcanistWorkflow',
    'ArcanistShellCompleteWorkflow' => 'ArcanistWorkflow',
    'ArcanistSingleLintEngine' => 'ArcanistLintEngine',
    'ArcanistSpellingLinter' => 'ArcanistLinter',
    'ArcanistSpellingLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistStartWorkflow' => 'ArcanistPhrequentWorkflow',
    'ArcanistStopWorkflow' => 'ArcanistPhrequentWorkflow',
    'ArcanistSubversionAPI' => 'ArcanistRepositoryAPI',
    'ArcanistSummaryLintRenderer' => 'ArcanistLintRenderer',
    'ArcanistTasksWorkflow' => 'ArcanistWorkflow',
    'ArcanistTestXHPASTLintSwitchHook' => 'ArcanistXHPASTLintSwitchHook',
    'ArcanistTextLinter' => 'ArcanistLinter',
    'ArcanistTextLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistTimeWorkflow' => 'ArcanistPhrequentWorkflow',
    'ArcanistTodoWorkflow' => 'ArcanistWorkflow',
    'ArcanistUSEnglishTranslation' => 'PhutilTranslation',
    'ArcanistUnitConsoleRenderer' => 'ArcanistUnitRenderer',
    'ArcanistUnitTestableLintEngine' => 'ArcanistLintEngine',
    'ArcanistUnitWorkflow' => 'ArcanistWorkflow',
    'ArcanistUpgradeWorkflow' => 'ArcanistWorkflow',
    'ArcanistUploadWorkflow' => 'ArcanistWorkflow',
    'ArcanistUsageException' => 'Exception',
    'ArcanistUserAbortException' => 'ArcanistUsageException',
    'ArcanistVersionWorkflow' => 'ArcanistWorkflow',
    'ArcanistWhichWorkflow' => 'ArcanistWorkflow',
    'ArcanistWorkflow' => 'Phobject',
    'ArcanistXHPASTLintNamingHookTestCase' => 'PhutilTestCase',
    'ArcanistXHPASTLinter' => 'ArcanistBaseXHPASTLinter',
    'ArcanistXHPASTLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistXMLLinter' => 'ArcanistLinter',
    'ArcanistXMLLinterTestCase' => 'ArcanistLinterTestCase',
    'CSharpToolsTestEngine' => 'XUnitTestEngine',
    'ConfigurableGolangTestEngine' => 'ArcanistUnitTestEngine',
    'ConfigurablePytestTestEngine' => 'ArcanistUnitTestEngine',
    'NoseTestEngine' => 'ArcanistUnitTestEngine',
    'PhpunitTestEngine' => 'ArcanistUnitTestEngine',
    'PhpunitTestEngineTestCase' => 'PhutilTestCase',
    'PhutilTestCaseTestCase' => 'PhutilTestCase',
    'PhutilTestSkippedException' => 'Exception',
    'PhutilTestTerminatedException' => 'Exception',
    'PhutilUnitTestEngine' => 'ArcanistUnitTestEngine',
    'PhutilUnitTestEngineTestCase' => 'PhutilTestCase',
    'PytestTestEngine' => 'ArcanistUnitTestEngine',
    'TAPTestEngine' => 'ArcanistUnitTestEngine',
    'UberStandardLinter' => 'ArcanistExternalLinter',
    'XUnitTestEngine' => 'ArcanistUnitTestEngine',
    'XUnitTestResultParserTestCase' => 'PhutilTestCase',
  ),
));
