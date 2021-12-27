function jsShowInputFeedback (elementId) {
  switch (elementId) {
    case 'formSettingsBasicsFirstName':
    var feedbackMessage = 'First name must be between 3 and 15 characters long and can contain only letters.'
    break

    case 'formSettingsBasicsLastName':
    var feedbackMessage = 'Last name must be between 3 and 15 characters long and can contain only letters.'
    break

    case 'formSettingsBasicsNickName':
    var feedbackMessage = 'Nickname must be between 3 and 15 characters long and can contain only letters.'
    break

    case 'formMessagingRecipient':
    var feedbackMessage = 'Choose a Recipient for the messages.'
    break

    case 'formMessagingContent':
    var feedbackMessage = 'MEssage cannot be empty and cannot contain "<" and ">" characters'
    break

    case 'formGroupName':
    var feedbackMessage = 'group name cannot be empty and cannot contain "<" and ">" characters'
    break
  }

  return feedbackMessage
}
