using NUnit.Framework;
using UnitTestApp;

namespace TestProject1
{
    public class Tests
    {
        private User user;

        [SetUp]
        public void Setup()
        {
            this.user = new User();
        }


        [Test]
        public void UserClassPropaty()
        {
            this.user.FirstName = "Teresa";
            this.user.LastName = "Green";
            Assert.AreEqual("Teresa Green", this.user.GetFullName());
        }
    }
}
